import $ from 'jquery';

class Search {
    // 1. describe and create/initiate our object
    // this.name = "Jane";
    constructor() {
        this.openButton     = $(".js-search-trigger");
        this.closeButton    = $('.search-overlay__close');
        this.searchOverlay  = $(".search-overlay");
        this.events();
    }
    // 2. events
    // on this.head feels cold, wearsHat
    events() {
        this.openButton.on("click", this.openOverlay.bind(this));
        this.closeButton.on("click", this.closeOverlay.bind(this));
    }

    // 3. methods (function, action....)
    // wearsHat() {}
    openOverlay() {
        this.searchOverlay.addClass("search-overlay--active");
    }

    closeOverlay() {
        this.searchOverlay.removeClass("search-overlay--active");
    }
}

export default Search;