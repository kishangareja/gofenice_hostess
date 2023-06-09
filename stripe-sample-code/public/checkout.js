// This is your test publishable API key.
const stripe = Stripe("pk_test_51N2pinSCV0iZjrj5blt0YABNaPlUO4SwtsbQNfkgA8wAanyOWYhg8yc3l8jT9AT5MP9XkjKoHcTx4k22grJlpLgT00GKZtdzK0");

// The items the customer wants to buy
var amount = localStorage.getItem("credit_amount");
const items = [{ id: "x-shirt",amount: amount}];

let elements;

initialize();
checkStatus();

document
  .querySelector("#payment-form")
  .addEventListener("submit", handleSubmit);

let emailAddress = '';
// Fetches a payment intent and captures the client secret
async function initialize() {
  // const { clientSecret } = await fetch("https://phpstack-957459-3413409.cloudwaysapps.com/stripe-sample-code/public/create.php", { //live link
    const { clientSecret } = await fetch("http://localhost/gofenice_hostess/stripe-sample-code/public/create.php", { // local link
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ items }),
  }).then((r) => r.json());

  elements = stripe.elements({ clientSecret });

  const linkAuthenticationElement = elements.create("linkAuthentication");
  linkAuthenticationElement.mount("#link-authentication-element");

  const paymentElementOptions = {
    layout: "tabs",
  };

  const paymentElement = elements.create("payment", paymentElementOptions);
  paymentElement.mount("#payment-element");
}

async function handleSubmit(e) {
  e.preventDefault();
  setLoading(true);

  const { error } = await stripe.confirmPayment({
    elements,
    confirmParams: {
      // Make sure to change this to your payment completion page
      // return_url: "https://phpstack-957459-3413409.cloudwaysapps.com/stripe-sample-code/public/checkout.html", // live link
      //return_url: "https://phpstack-957459-3413409.cloudwaysapps.com/public/en/payment-success",
      return_url: "http://localhost/gofenice_hostess/stripe-sample-code/public/checkout.html", // local link
      receipt_email: emailAddress,
    },
  });

  // This point will only be reached if there is an immediate error when
  // confirming the payment. Otherwise, your customer will be redirected to
  // your `return_url`. For some payment methods like iDEAL, your customer will
  // be redirected to an intermediate site first to authorize the payment, then
  // redirected to the `return_url`.
  if (error.type === "card_error" || error.type === "validation_error") {
    showMessage(error.message);
  } else {
    showMessage("An unexpected error occurred.");
  }

  setLoading(false);
}

// Fetches the payment intent status after payment submission
async function checkStatus() {
  const clientSecret = new URLSearchParams(window.location.search).get(
    "payment_intent_client_secret"
  );

  if (!clientSecret) {
    return;
  }

  const { paymentIntent }  = await stripe.retrievePaymentIntent(clientSecret);
  // Set Item
  localStorage.setItem("payment_response", JSON.stringify(paymentIntent));
  // alert(localStorage.getItem("payment_response"));
  switch (paymentIntent.status) {
    case "succeeded":
      showMessage("Payment succeeded!");
      break;
    case "processing":
      showMessage("Your payment is processing.");
      break;
    case "requires_payment_method":
      showMessage("Your payment was not successful, please try again.");
      break;
    default:
      showMessage("Something went wrong.");
      break;
  }
}

// ------- UI helpers -------

function showMessage(messageText) {
  const messageContainer = document.querySelector("#payment-message");
  messageContainer.classList.remove("hidden");
  messageContainer.textContent = messageText;

  setTimeout(function () {
    messageContainer.classList.add("hidden");
    messageText.textContent = "";
  }, 4000);
}

// Show a spinner on payment submission
function setLoading(isLoading) {
  if (isLoading) {
    // Disable the button and show a spinner
    document.querySelector("#submit").disabled = true;
    document.querySelector("#spinner").classList.remove("hidden");
    document.querySelector("#button-text").classList.add("hidden");
  } else {
    document.querySelector("#submit").disabled = false;
    document.querySelector("#spinner").classList.add("hidden");
    document.querySelector("#button-text").classList.remove("hidden");
  }
}