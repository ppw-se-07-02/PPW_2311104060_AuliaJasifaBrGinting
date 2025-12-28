const PRODUCTS = [
  {
    id: 1,
    name: "Smart Watches Pro",
    price: 750000,
    short: "Smartwatch dengan fitur kesehatan lengkap",
    images: [
      "assets/img/Smart watches pro.jpeg",
      "assets/img/Smart watches1.jpeg",
      "assets/img/Smart watches2.jpeg"
    ],
    desc: "Smart Watch Pro hadir dengan fitur monitor detak jantung, sleep tracking, dan notifikasi pesan."
  },
  {
    id: 2,
    name: "Gaming Mouse",
    price: 120000,
    short: "Mouse gaming presisi tinggi dan ergonomis",
    images: [
      "assets/img/MOUSE GAMING.jpeg",
      "assets/img/MOUSE GAMING1.jpeg"
    ],
    desc: "Gaming Mouse dengan DPI tinggi, desain ergonomis, dan tombol macro yang responsif untuk pengalaman bermain maksimal."
  },
  {
    id: 3,
    name: "Wireless Earbuds",
    price: 250000,
    short: "Earbuds nirkabel dengan suara jernih",
    images: [
      "assets/img/Wireless Earbuds2.jpeg",
      "assets/img/Wireless Earbuds1.jpeg",
      "assets/img/Wireless Earbuds.jpeg"
    ],
    desc: "Wireless Earbuds dengan koneksi cepat, suara jernih, dan baterai tahan lama hingga 6 jam."
  },
  {
    id: 4,
    name: "Bluetooth Speaker",
    price: 350000,
    short: "Speaker portable bass kuat dan tahan air",
    images: [
      "assets/img/Bluetooth Speaker.jpeg",
      "assets/img/Bluetooth Speaker1.jpeg",
      "assets/img/Bluetooth Speaker2.jpeg"
    ],
    desc: "Bluetooth Speaker dengan suara powerful, baterai 12 jam, serta desain compact untuk dibawa ke mana saja."
  },
  {
    id: 5,
    name: "Smartphone Z",
    price: 4500000,
    short: "Smartphone flagship kamera 108MP",
    images: [
      "assets/img/SMARTPHONE Z.jpeg",
      "assets/img/SMARTPHONE1 Z.jpeg",
      "assets/img/SMARTPHONE2 Z.jpeg"
    ],
    desc: "Smartphone Z hadir dengan layar 120Hz, kamera 108MP, RAM 8GB, dan fast charging 65W."
  },
  {
    id: 6,
    name: "Headphone G",
    price: 650000,
    short: "Headphone gaming profesional dengan mic",
    images: [
      "assets/img/headphones.jpeg",
      "assets/img/headphones1.jpeg",
      "assets/img/headphones2.jpeg"
    ],
    desc: "Headphone G dilengkapi surround sound, noise-cancelling, dan mikrofon fleksibel untuk komunikasi jernih saat gaming."
  },
];


let cartCount = 0;
function formatRupiah(num){ return "Rp " + num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."); }

function renderProducts(filterText=""){
  const container = $("#productsContainer");
  container.empty();
  const filtered = PRODUCTS.filter(p => p.name.toLowerCase().includes(filterText.toLowerCase()));
  filtered.forEach(p=>{
    const card = `
    <div class="col-12 col-sm-6 col-lg-4 mb-4">
      <div class="card product-card h-100">
        <img src="${p.images[0]}" class="card-img-top" alt="${p.name}">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">${p.name}</h5>
          <p class="card-text">${p.short}</p>
          <p class="fw-bold">${formatRupiah(p.price)}</p>
          <div class="mt-auto d-flex gap-2">
            <a href="detail.html?id=${p.id}" class="btn btn-outline-primary btn-sm flex-grow-1">Detail</a>
            <button class="btn btn-primary btn-sm add-to-cart" data-id="${p.id}">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>`;
    container.append(card);
  });
}

function addToCart(id){
  const p = PRODUCTS.find(x=>x.id===id);
  if(!p) return;
  cartCount++;
  $("#cartCount").text(cartCount);
  $("#cartToastBody").text(`${p.name} ditambahkan ke keranjang`);
  const toast = new bootstrap.Toast(document.getElementById('cartToast'), { delay:2000 });
  toast.show();
}

function renderProductDetail(id){
  const p = PRODUCTS.find(x=>x.id===Number(id));
  const target = $("#productDetail");
  if(!p){ target.html(`<div class='alert alert-danger'>Produk tidak ditemukan.</div>`); return; }

  let inner="";
  p.images.forEach((img,i)=>{
    inner+=`<div class="carousel-item ${i===0?'active':''}">
              <img src="${img}" class="d-block w-100 rounded shadow-sm" alt="${p.name}">
            </div>`;
  });

  const html = `
  <button class="btn btn-outline-secondary mb-3" onclick="history.back()">
    <i class="bi bi-arrow-left"></i> Back
  </button>
  <div class="row align-items-start">
    <div class="col-md-6">
      <div id="prodCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
        <div class="carousel-inner">${inner}</div>
        <button class="carousel-control-prev" type="button" data-bs-target="#prodCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#prodCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
    <div class="col-md-6">
      <h3>${p.name}</h3>
      <p class="fw-bold">${formatRupiah(p.price)}</p>
      <p>${p.desc}</p>
      <button class="btn btn-success" id="btnAddDetail" data-id="${p.id}">
        <i class="bi bi-cart-plus"></i> Add to Cart
      </button>
    </div>
  </div>`;
  target.html(html);
}

$(document).ready(()=>{
  if($("#productsContainer").length){
    renderProducts();
    $("#searchInput").on("input", ()=> renderProducts($("#searchInput").val()));
    $(document).on("click",".add-to-cart",e=> addToCart(Number($(e.target).data("id"))));
  }

  if($("#productDetail").length){
    const id = new URLSearchParams(window.location.search).get("id") || 1;
    renderProductDetail(id);
    $(document).on("click","#btnAddDetail",e=> addToCart(Number($(e.target).data("id"))));
  }
});
