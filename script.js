//query selected from index, as class, dot used
let searchForm = document.querySelector('.search-form');

//query of search button selected to work on
//arrow fnc, with onclick method-- when clicked
document.querySelector('#search-btn').onclick = ()=>
    {
        //when var is active, references style
        searchForm.classList.toggle('active');

        //when search btn, others wont appear
        shoppingCart.classList.remove('active');
        loginForm.classList.remove('active');
        navbar.classList.remove('active');
    };

//similarly for the shopping cart    
let shoppingCart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = ()=>
    {
        shoppingCart.classList.toggle('active');

        //for shopping cart btn, other wont appear
        searchForm.classList.remove('active');
        loginForm.classList.remove('active');
        navbar.classList.remove('active');
    };

//again for the login cart
let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = ()=>
      {
            loginForm.classList.toggle('active');

            //login appears only
            searchForm.classList.remove('active');
            shoppingCart.classList.remove('active');
            navbar.classList.remove('active');
      };
    

//for navbar slide
 let navbar = document.querySelector('.navbar');

 document.querySelector('#menu-btn').onclick = ()=>
      {
           navbar.classList.toggle('active');

           //navbar only
           searchForm.classList.remove('active');
           shoppingCart.classList.remove('active');
           loginForm.classList.remove('active');
      };


window .onscroll =()=>
{
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

//sciptjs from swiperjs for products
var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,

    //autoplay on sliders, 4s with if hovered no stop
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },

    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
  });


//sciptjs from swiperjs for reviews
var swiper = new Swiper(".review-slider", {
  loop:true,
  spaceBetween: 20,

  //autoplay on sliders, 4s with if hovered no stop
  autoplay: {
      delay: 4000,
      disableOnInteraction: false,
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1020: {
      slidesPerView: 3,
    },
  },
});


import React, { useEffect, useState } from 'react';

function Products() {
    const [products, setProducts] = useState([]);

    useEffect(() => {
        fetch('http://localhost/your_project_folder/api/getProducts.php')
            .then((response) => response.json())
            .then((data) => setProducts(data))
            .catch((error) => console.error("Error fetching products:", error));
    }, []);

    return (
        <div>
            <h2>Products</h2>
            <ul>
                {products.map((product) => (
                    <li key={product.id}>{product.name} - ${product.price}</li>
                ))}
            </ul>
        </div>
    );
}

export default Products;
