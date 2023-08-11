$(document).ready(function() {

  function updateTotal() {
    var totalPrice = 0;

    $('tbody tr').each(function() {
      var quantity = $(this).find('input[type="number"]').val();
      var price = parseFloat($(this).find('td:nth-child(2)').text().replace('$', ''));
      var total = quantity * price;
      $(this).find('td:nth-child(4)').text('$' + total.toFixed(2));
      totalPrice += total;
    });

    var tax = totalPrice * 0.075; // Assuming 7.5% tax rate
    var total = totalPrice + tax;
    $('tfoot tr:nth-child(1) td:last-child').text('$' + totalPrice.toFixed(2));
    $('tfoot tr:nth-child(2) td:last-child').text('$' + tax.toFixed(2));
    $('tfoot tr:nth-child(3) td:last-child').text('$' + total.toFixed(2));
  }

  $('.product button').on('click', function() {
    var productName = $(this).siblings('h2').text();
    var productPrice = $(this).siblings('p').eq(1).text().substring(8);
    var productCount = $(this).siblings('input').val();

    alert('Added ' + productName + ' to cart with price: ' + parseFloat(productPrice) * parseInt(productCount));
    updateTotal();
  });

  $('input[type="number"]').on('change', function() {
    updateTotal();
  });

  updateTotal();
});
