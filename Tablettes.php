<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Boutique de iphones & Réparation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>
<body>

  <nav class="navbar justify-content-center">
    <div class="nav-icons d-flex">

        <a href="index.php"><i class="fa-solid fa-house"></i></a>

        <a href="marketplace.php"><i class="fa-solid fa-store"></i></a>

        <a href="contact.php"><i class="fa-solid fa-envelope"></i></a>
        
        <a href="reparer.php"><i class="fa-solid fa-wrench"></i></a>
        

    </div>
</nav>


<section class="tablet-section">
  <div class="container">
    <h2 class="title">Nos Tablettes</h2>
    <p class="subtitle">Choisissez une tablette adaptée à vos besoins professionnels et personnels.</p>

    <div class="grid">

      <div class="card">
        <img src="https://media.johnlewiscontent.com/i/JohnLewis/109648245?fmt=auto&amp;$background-off-white$" alt="iPad Pro" class="product-image">
        <h3>iPad Pro</h3>
        <p>Puissance extrême avec puce Apple M2. Idéal pour design, montage et usage professionnel intensif.</p>
        <span class="tag">Usage Pro</span>
            <a href="https://wa.me/2290143520071?text=Bonjour%20je%20veux%20commander%20l'iPad%20Pro" class="btn" target="_blank">Commander</a>
      </div>

      <div class="card">
        <img src="https://static01.galaxus.com/productimages/3/8/3/5/1/4/1/6/iPad_Air_Wi-Fi_10.9_in_Space_Gray_PDP_Image_Position-1B_WWEN.jpg_720.jpeg" alt="iPad Air" class="product-image">
        <h3>iPad Air</h3>
        <p>Rapide, léger et élégant. Parfait pour étudiants et entrepreneurs.</p>
        <span class="tag">Polyvalent</span>
        <a href="https://wa.me/2290143520071?text=Bonjour%20je%20veux%20commander%20l'iPad%20Air" class="btn" target="_blank">Commander</a>
      </div>

      <div class="card">
        <img src="https://d1rlzxa98cyc61.cloudfront.net/catalog/product/1/9/194802_2024_1.jpg?auto=webp&amp;format=pjpg&amp;width=640" alt="iPad Mini" class="product-image">
        <h3>iPad Mini</h3>
        <p>Format compact avec grande performance. Idéal pour mobilité.</p>
        <span class="tag">Portable</span>
        <a href="https://wa.me/2290143520071?text=Bonjour%20je%20veux%20commander%20l'iPad%20Mini" class="btn" target="_blank">Commander</a>
      </div>

      <div class="card">
        <img src="https://stg-images.samsung.com/is/image/samsung/p6pim/us/sm-x828uzaavzw/gallery/us-galaxy-tab-s10-plus-sm-x820-572802-sm-x828uzaavzw-551239056?$PD_GALLERY_PNG$" alt="Galaxy Tab S" class="product-image">
        <h3>Galaxy Tab S</h3>
        <p>Écran AMOLED + S Pen. Idéal pour multitâche et productivité.</p>
        <span class="tag">Android Premium</span>
        <a href="https://wa.me/2290143520071?text=Bonjour%20je%20veux%20commander%20le%20Galaxy%20Tab%20S" class="btn" target="_blank">Commander</a>
      </div>

      <div class="card">
        <img src="https://static01.galaxus.com/productimages/5/0/8/6/0/3/2/6/6/6/4/0/3/7/8/0/1/6/6/fa590c5b-780d-4627-8312-38b8f4d07a00.jpg_720.jpeg" alt="Lenovo Tab M11" class="product-image">
        <h3>Lenovo Tab</h3>
        <p>Solution fiable pour navigation, vidéos et tâches simples.</p>
        <span class="tag">Basique</span>
        <a href="https://wa.me/2290143520071?text=Bonjour%20je%20veux%20commander%20le%20Lenovo%20Tab%20M11" class="btn" target="_blank">Commander</a>
      </div>

      <div class="card">
        <img src="https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/family-color-hero-fy25?fmt=png-alpha&amp;scl=1" alt="Microsoft Surface family" class="product-image">
        <h3>Microsoft Surface</h3>
        <p>Tablette hybride avec Windows. Idéal pour usage professionnel complet.</p>
        <span class="tag">Business</span>
        <a href="https://wa.me/2290143520071?text=Bonjour%20je%20veux%20commander%20la%20Microsoft%20Surface" class="btn" target="_blank">Commander</a>
      </div>

    </div>
  </div>
</section>

<style>
  .navbar {
  width: 100%;
  background: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 14px 0;
  box-shadow: 0 2px 10px rgba(0,0,0,0.06);
  position: sticky;
  top: 0;
  z-index: 1000;
}

/* container icons */
.nav-icons {
  display: flex;
  gap: 45px;
  align-items: center;
  justify-content: center;
}

/* liens */
.nav-icons a {
  color: #111;
  font-size: 20px;
  text-decoration: none;
  transition: 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* hover effet clean */
.nav-icons a:hover {
  color: #ff3b30;
  transform: translateY(-2px);
}

/* option : icônes un peu plus pro */
.nav-icons i {
  font-size: 20px;
}
/* RESET */
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family: 'Outfit', sans-serif;
}

/* SECTION */
.tablet-section{
  padding:80px 20px;
  background:#f5f5f7;
}

.container{
  max-width:1200px;
  margin:auto;
}

/* TITRE */
.title{
  text-align:center;
  font-size:2.8rem;
  font-weight:700;
  margin-bottom:10px;
  color:#111;
}

.subtitle{
  text-align:center;
  color:#666;
  margin-bottom:50px;
  font-size:16px;
}

/* GRID */
.grid{
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(270px,1fr));
  gap:30px;
}

/* CARD */
.card{
  background:#fff;
  border-radius:20px;
  overflow:hidden;
  box-shadow:0 10px 30px rgba(0,0,0,0.06);
  transition:0.4s ease;
  position:relative;
  display: flex; /* Added for better content alignment */
  flex-direction: column; /* Added for better content alignment */
}

.card:hover{
  transform:translateY(-10px) scale(1.02);
  box-shadow:0 20px 40px rgba(0,0,0,0.12);
}

/* IMAGE */
.card .product-image {
  width: 100%;
  height: 220px;
  object-fit: contain; /* Shows entire image without cropping */
  padding: 20px; /* Space around image */
  background-color: #fcfcfc; /* Slight background to distinguish image area */
  transition: 0.4s;
}

.card:hover img{
  transform:scale(1.05);
}

/* TEXTE */
.card h3{
  font-size:20px;
  margin:20px 15px 10px;
  color:#111;
}

.card p{
  font-size:14px;
  color:#555;
  margin:0 15px 15px;
  line-height:1.5;
  flex-grow: 1; /* Pushes button/tag to bottom */
}

/* TAG */
.tag{
  display:inline-block;
  margin:0 15px 15px;
  padding:6px 12px;
  font-size:12px;
  background:#000;
  color:#fff;
  border-radius:20px;
  align-self: flex-start; /* Keeps tag from stretching */
}

/* BOUTON */
.btn{
  display:block;
  margin:0 15px 20px;
  padding:12px;
  text-align:center;
  background:#000;
  color:#fff;
  border-radius:30px;
  text-decoration:none;
  font-size:14px;
  transition:0.3s;
  margin-top: auto; /* Aligns button to bottom of card */
}

.btn:hover{
  background:#ff3b30;
}footer {
    background-color: #2d2d2d; /* équivalent de var(--dark) mais stable */
    color: rgba(255,255,255,0.75);
    padding: 70px 0 0;
}

footer .row {
    display: grid !important;
    grid-template-columns: repeat(4, 1fr);
    gap: 40px;
    align-items: start;
}


footer .col-lg-4,
footer .col-md-6 {
    width: 100% !important;
    max-width: 100% !important; 
    flex: unset !important;
}

/* TITRES */
.footer-title {
    color: #fff;
    font-weight: 600;
    margin-bottom: 25px;
    font-size: 1.2rem;
}

/* LISTES */
.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 10px;
}

.footer-links a {
    color: rgba(255,255,255,0.7);
    text-decoration: none;
    transition: 0.3s;
}

.footer-links a:hover {
    color: var(--primary);
}

/* SOCIAL */
.social-icons a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background-color: rgba(255,255,255,0.1);
    border-radius: 50%;
    color: white;
    margin-right: 10px;
    transition: 0.3s;
}

.social-icons a:hover {
    background-color: var(--primary);
}

/* COPYRIGHT */
.copyright {
    border-top: 1px solid rgba(255,255,255,0.1);
    padding: 20px 0;
    margin-top: 50px;
}

/* RESPONSIVE */
@media(max-width:768px){
  .title{
    font-size:2rem;
  }
}
</style>
 <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h4 class="footer-title"><i class="fas fa-shoe-prints me-2"></i>StyleStep</h4>
                    <p>Votre destination pour des téléphones de qualité, et performants. Profitez d’une livraison rapide et d’un service client exceptionnel.</p>
                   
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h4 class="footer-title">Liens Rapides</h4>
                    <ul class="footer-links">
                        <li><a href="index.php">Accueil</a></li>
                     
                        <li><a href="contact.php">Contact</a></li>
             
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h4 class="footer-title">Catégories</h4>
                    <ul class="footer-links">
                        <li><a href="marketplace.php">IPhones</a></li>
                        <li><a href="samsung.php">Samsung</a></li>
                        <li><a href="Tablettes.php">Tablettes</a></li>
                        <li><a href="reparer.php">Réparation</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <h4 class="footer-title">Contact</h4>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt me-2"></i>calavi togba non loin du Carrefou ,Assrossa</li>
                        <li><i class="fas fa-phone me-2"></i> 0143520071</li>
                        <li><i class="fas fa-clock me-2"></i> Lundi - Samedi : 9h - 20h</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright text-center">
            <div class="container">
                <p>&copy; 2026 MONEYKING. Tous droits réservés.</p>
            </div>
 