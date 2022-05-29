const redirectProductDetails = (id) => {
  window.location.href = `?controller=product&action=detail&id=${id}`;
};

const addToCart = (id, count = 1) => {
  $.post("?controller=cart&action=store", {
    method: "POST",
    data: {
      id,
      count,
    },
  }).then((response) => {
    const { data, message } = JSON.parse(response);

    console.log($("#cart-icon").length);
    if (!$("#cart-icon").length) {
      $("#icon-cart-i").append(' <p class="number_cart" id="cart-icon"></p>');
    }
    alert(message);
    $("#cart-icon").text(data);
  });
};

const checkCode = (total) => {
  const valueCode = $("#input-discount-code").val();
  if (!valueCode) return;
  $.post("?controller=order&action=checkdiscountcode", {
    method: "POST",
    data: {
      code: valueCode,
    },
  }).then((response) => {
    const { data, message } = JSON.parse(response);
    alert(message);
    if (data && data.length) {
      let discountPrice = 0;
      const value = data[0].value;
      if (value.includes("%")) {
        discountPrice = (total * parseFloat(value)) / 100;
      } else {
        discountPrice = parseFloat(value);
      }
      $("#row-discount-price").html(`
         <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">giảm</div>
                        <div class="col text-right"> -&dollar; ${discountPrice}</div>
                    </div>
          `);

      if (discountPrice < total) {
        $("#row-total-price").html(`&dollar; ${total - discountPrice}`);
      } else {
        $("#row-total-price").html(` &dollar; 0`);
      }

      $("#input-discount-code").attr("disabled", "disabled");
    }
  });
};

const checkout = (user) => {
  if (!user) {
    return alert("Bạn phải đăng nhập trước");
  }
  const userId = user;
  const address = $("#input-address").val();
   if (!address) {
     return alert("Vui lòng nhập địa chỉ");
   }
  const data = {
    userId,
    address,
    shipping: $("#order-shipping").val(),
    price:
      parseFloat(
        $("#row-total-price")
          .text()
          .toString()
          .split(" ")
          .join("")
          .split("$")[1]
      ) || null,
  };
  if ($("#input-discount-code").attr("disabled")) {
    data["discountCode"] = $("#input-discount-code").val();
  }
  $.post("?controller=order&action=store", {
    method: "POST",
    data,
  })
    .then((res) => {
      // console.log(res)
       const { data, message } = JSON.parse(res);
       alert(message);
       if(data === 1) {
         window.location.href = './index.php';
       }
    })
    .catch((err) => {
      console.log(err);
    });
};
