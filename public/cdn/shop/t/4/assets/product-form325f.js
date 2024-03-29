/** Shopify CDN: Minification failed

Line 14:40 Transforming class syntax to the configured target environment ("es5") is not supported yet
Line 15:15 Transforming object literal extensions to the configured target environment ("es5") is not supported yet
Line 24:19 Transforming object literal extensions to the configured target environment ("es5") is not supported yet
Line 26:6 Transforming const to the configured target environment ("es5") is not supported yet
Line 36:6 Transforming const to the configured target environment ("es5") is not supported yet
Line 40:6 Transforming const to the configured target environment ("es5") is not supported yet
Line 69:22 Transforming object literal extensions to the configured target environment ("es5") is not supported yet
Line 69:36 Transforming default arguments to the configured target environment ("es5") is not supported yet

**/
if (!customElements.get('product-form')) {
  customElements.define('product-form', class ProductForm extends HTMLElement {
    constructor() {
      super();

      this.form = this.querySelector('form');
      this.form.querySelector('[name=id]').disabled = false;
      this.form.addEventListener('submit', this.onSubmitHandler.bind(this));
      this.cartNotification = document.querySelector('cart-notification');
    }

    onSubmitHandler(evt) {
      evt.preventDefault();
      const submitButton = this.querySelector('[type="submit"]');
      if (submitButton.classList.contains('loading')) return;

      this.handleErrorMessage();
      //this.cartNotification.setActiveElement(document.activeElement);

      submitButton.setAttribute('aria-disabled', true);
      submitButton.classList.add('loading');
//       this.querySelector('.loading-overlay__spinner').classList.remove('hidden');

      const config = fetchConfig('javascript');
      config.headers['X-Requested-With'] = 'XMLHttpRequest';
      delete config.headers['Content-Type'];

      const formData = new FormData(this.form);
      if(!document.querySelector(".ajax-cart-disabled")) {
        formData.append('sections', this.cartNotification.getSectionsToRender().map((section) => section.id));
        formData.append('sections_url', window.location.pathname);
      }
      config.body = formData;
      
      fetch(`${routes.cart_add_url}`, config)
        .then((response) => response.json())
        .then((response) => {
          if (response.status) {
            this.handleErrorMessage(response.description);
            return;
          }
          //window.scrollTo({top: 0, behavior: 'smooth'});
          if(document.querySelector(".ajax-cart-disabled")) window.location = "/cart";
          this.cartNotification.renderContents(response);
          openCartDrawer();
        })
        .catch((e) => {
          console.error(e);
        })
        .finally(() => {
          submitButton.classList.remove('loading');
          submitButton.removeAttribute('aria-disabled');
//           this.querySelector('.loading-overlay__spinner').classList.add('hidden');
        });
    }

    handleErrorMessage(errorMessage = false) {
      this.errorMessageWrapper = this.errorMessageWrapper || this.querySelector('.product-form__error-message-wrapper');
      this.errorMessage = this.errorMessage || this.errorMessageWrapper.querySelector('.product-form__error-message');

      this.errorMessageWrapper.toggleAttribute('hidden', !errorMessage);

      if (errorMessage) {
        this.errorMessage.textContent = errorMessage;
      }
    }
  });
}