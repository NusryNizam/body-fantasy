function selectFilter(name) {
  const customer_btn = document.querySelector("button.btn:nth-child(2)");
  const store_div = document.getElementById('store_section');
  const store_btn = document.querySelector("button.btn:nth-child(1)");
  const customer_div = document.getElementById('customer_section');

  if ( name == "customer") {
   customer_btn.addEventListener("click",() => {
     store_div.style.display = "none";
     customer_div.style.display = "flex";
     customer_btn.className += " active_btn"; //adding active_btn class to customer_btn
     store_btn.classList.remove("active_btn") ; //remove active status from store button
   });

 }
   if (name == "store") {
     store_btn.addEventListener("click",() => {
       customer_div.style.display = "none";
       store_div.style.display = "flex";
       store_btn.className += " active_btn"; //adding active_btn class to store_btn
       customer_btn.classList.remove("active_btn") ;//remove active status from customer button

     });
   }
}
