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
}).then((response) => {
  const {data,message} = JSON.parse(response)
  alert(message);
  $("#cart-icon").text(data);
});
}