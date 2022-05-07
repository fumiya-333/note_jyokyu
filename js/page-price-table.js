function load() {
  const pagePriceTable = new PagePriceTable();
  pagePriceTable.init();
}

function resize() {}

function PagePriceTable() {}

PagePriceTable.prototype.init = function () {
  this.addEvent();
};

PagePriceTable.prototype.addEvent = function () {
  new ScrollHint(".js-scrollable", {
    suggestiveShadow: true,
  });
};
