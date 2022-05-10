$( ".shop_cart" ).on( "click", function( event ) {
    alert('123')
  });

const redirectProductDetails = (id) => {
 window.location.href = `?controller=product&action=detail&id=${id}`;
}

const addToCart = (id,count = 1) => {
$.post("?controller=cart&action=store", {
  method: "POST",
  data: {
    id,
    count
  },
}).then((response) => console.log(response));
}