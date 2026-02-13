
function getCart() {
            return JSON.parse(localStorage.getItem('cart')) || {};
        }

function updateCartBadge() {
            const cart = getCart();
            const count = Object.values(cart)
                .reduce((sum, item) => sum + item.quantity, 0);

            document.getElementById('cart-count').textContent = count;
        }

document.addEventListener('DOMContentLoaded', updateCartBadge);

