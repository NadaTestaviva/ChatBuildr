<template>    
<div class="flex justify-center items-center mt-52">
    <div class="w-full max-w-xs">
        <div class="grid grid-cols-8 overflow-hidden col-gap-6 mb-5">
    <img class="block col-span-3 h-20 rounded bg-gray-600" src="../img/rectangle-1.png" alt />
    <div class="col-span-5">
      <div class="flex">
        <h6 class="text-sm font-semibold text-gray-800 flex-grow">{{ testString }}</h6>
        <button>
          <svg class="w-3" src="../img/rectangle-1.png" viewBox="0 0 20 20">
            <path
              d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"
            />
          </svg>
        </button>
      </div>
      <p
        class="text-xs truncate text-gray-600"
      >desc</p>
      <span class="text-sm text-gray-800">20 USD</span>
    </div>
  </div>
        <div id="paypal-button" />
    </div>
</div>
</template>

<script>

export default {
    name : "pay",
    props: {
            testString: String
        },
    mounted() {
        function loadScript(url, callback) {
            const el = document.querySelector(`script[src="${url}"]`);
            if (!el) {
                const s = document.createElement('script');
                s.setAttribute('src', url); s.onload = callback;
                document.head.insertBefore(s, document.head.firstElementChild);
            }
        }

        loadScript('https://www.paypal.com/sdk/js?client-id=sb&currency=USD', () => {
            paypal.Buttons({
            
                // Set up the transaction
                createOrder(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: '0.01',
                            },
                        }],
                    });
                },

                // Finalize the transaction
                onApprove(data, actions) {
                    return actions.order.capture().then(details => {
                        // Show a success message to the buyer
                        alert(`Transaction completed by ${details.payer.name.given_name}`);
                    });
                },

            }).render('#paypal-button');
        });
    },
};
</script>