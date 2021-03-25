import $ from 'jquery'

class Search {
    // 1. describe and create/initiate our object
    constructor() {
        this.openButton = $('.js-search-trigger');
        this.closeButton = $('.search-overlay__close');
        this.searchOverlay = $('.search-overlay');
        this.isOverlayOpened = false;
        this.isSpinnerVisible = false;
        this.previousValue = null;
        this.searchField = $('#search-term');
        this.typingTimer = null;
        this.resultsDiv = $('#search-overlay__results');

        this.events();
    }

    // 2. events
    events() {
        this.openButton.on('click', this.openOverLay.bind(this));
        this.closeButton.on('click', this.closeOverlay.bind(this));
        $(document).on('keydown', this.keyPressDispatcher.bind(this));
        this.searchField.on('keyup', this.typingLogic.bind(this));
    }

    // 3. methods
    openOverLay() {
        this.searchOverlay.addClass('search-overlay--active');
        $('body').addClass('body-no-scroll');
        this.isOverlayOpened = true;
    }

    closeOverlay() {
        this.searchOverlay.removeClass('search-overlay--active');
        $('body').removeClass('body-no-scroll');
        this.isOverlayOpened = false;
    }

    keyPressDispatcher(event) {
        if (event.keyCode === 83 && !this.isOverlayOpened && !$('input, textarea').is(':focus')) {
            this.openOverLay();
        }
        if (event.keyCode === 27 && this.isOverlayOpened) {
            this.closeOverlay();
        }
    }

    typingLogic() {
        if (this.searchField.val() !== this.previousValue) {
            clearTimeout(this.typingTimer);

            if (this.searchField.val()) {
                if (!this.isSpinnerVisible) {
                    this.resultsDiv.html('<div class="spinner-loader"></div>');
                    this.isSpinnerVisible = true;
                }
                this.typingTimer = setTimeout(this.getResults.bind(this), 2000);
            } else {
                this.resultsDiv.html('');
                this.isSpinnerVisible = false;
            }
        }
        this.previousValue = this.searchField.val();
    }

    getResults() {
        this.isSpinnerVisible = false;
        this.resultsDiv.html('say something!');
    }
}

export default Search;