function load() {
  const pageContact = new PageContact();
  pageContact.init();
}

function resize() {}

function PageContact() {}

PageContact.prototype.init = function () {
  $(".mw_wp_form form").attr("class", "p-contact__inner__form");
  $(".p-contact__inner__form__radios .mwform-radio-field.horizontal-item").attr(
    "class",
    "p-contact__inner__form__radios__radio-field"
  );
  $(
    ".p-contact__inner__form__radios__radio-field .mwform-radio-field-text"
  ).attr(
    "class",
    "c-radio-field-text p-contact__inner__form__radios__radio-field__radio-field-text"
  );
  $(
    ".p-contact__inner__form__privacy-policy-agree-checkbox-area .mwform-checkbox-field.horizontal-item"
  ).attr(
    "class",
    "p-contact__inner__form__privacy-policy-agree-checkbox-area__checkbox-field"
  );
  $(
    ".p-contact__inner__form__privacy-policy-agree-checkbox-area__checkbox-field .mwform-checkbox-field-text"
  ).attr(
    "class",
    "c-checkbox-field-text p-contact__inner__form__privacy-policy-agree-checkbox-area__checkbox-field__checkbox-field-text"
  );
  dispInputError();
};
