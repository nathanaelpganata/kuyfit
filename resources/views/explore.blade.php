@extends('layouts.base')

@section('title', 'Explore')
@section('content')
<html>
<head>
  <title>Explore Page</title>
  <style>
    * {
      box-sizing: border-box;
    }
    
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    
    .landscape {
  width: 100%;
  height: 100vh;
  background-image: url('images/futsalbg.jpg');
  background-size: cover;
  background-position: center;
  filter: brightness(89%);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  color: #fff;
  text-align: center;
}

.landscape h1 {
  font-family: 'Playfair Display', serif;
  font-size: 76px;
  text-align: center;
  filter: brightness(100%);
  color: #fff;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5), 0 0 10px rgba(255, 255, 255, 1);
  margin-top: 100px;
}
    .explore-section {
      background: #fff;
      padding: 50px 0;
    }
    
    .explore-section h2 {
      font-family: 'Playfair Display', serif;
      font-size: 48px;
      font-weight: 600;
      text-align: center;
      margin-bottom: 50px;
    }
    
    .option-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    
    .option {
      display: flex;
      align-items: center;
      border: none;
      margin-bottom: 30px;
    }
    
    .option img {
      width: 558px;
      height: 226px;
    }
    
    .option .description {
      width: 558px;
      height: 190px;
      background-color: #f9f9f9;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 10px;
      margin-left: 20px;
    }
    
    .option h3 {
      font-family: 'Rubik', sans-serif;
      font-size: 45px;
      margin-bottom: 10px;
    }
    
    .option p {
      font-family: 'Rubik', sans-serif;
      font-size: 15px;
    }
    
    .option .go-button {
      font-family: 'Rubik', sans-serif;
      font-size: 12px;
      color: #00bfff;
      cursor: pointer;
    }
    
    .footer {
      background: #01B2FE;
      padding: 20px;
      display: flex;
      align-items: center;
    }
    
    .footer img {
      width: 50px;
      height: auto;
      margin-right: 10px;
    }
    
    .footer .menu {
      margin-right: 20px;
    }
    
    .footer .menu a {
      margin-right: 10px;
      text-decoration: none;
      color: #fff;
    }
    
    .footer .contact-info {
      color: #fff;
    }
    
    .location {
      margin-left: auto;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="landscape">
    <h1>Book a Venue Quickly 
      and Easily</h1>
  </div>
  
  <div class="explore-section">
    <h2>Choose Your Preferred Sport</h2>
    <div class="option-container">
      <div class="option">
        <img src="images/futsal.jpg" alt="Futsal">
        <div class="description">
          <h3>Futsal</h3>
          <p>Futsal adalah permainan bola yang dimainkan oleh dua regu, yang masing- masing beranggotakan lima orang. Tujuannya adalah memasukkan bola ke gawang lawan, dengan memanipulasi bola dengan kaki dan anggota tubuh lain selain tangan, kecuali posisi kiper.</p>
          <p class="go-button">Go</p>
        </div>
      </div>
      <div class="option">
        <img src="images/basket.jpg" alt="Basketball">
        <div class="description">
          <h3>Basketball</h3>
          <p>Bola basket adalah olahraga bola berkelompok yang terdiri dari dua tim dengan masing-masing tim berisi lima orang. Kedua tim tersebut saling bertanding untuk mencetak poin dengan memasukkan bola ke keranjang lawan sebanyak-banyaknya.</p>
          <p class="go-button">Go</p>
        </div>
      </div>
      <div class="option">
        <img src="images/badminton.jpg" alt="Badminton">
        <div class="description">
          <h3>Badminton</h3>
          <p>Bulu tangkis adalah olahraga yang menggunakan raket dan kok sebagai alatnya, bisa dimainkan secara perseorangan (single) atau ganda (double). Bisa juga diartikan bahwa bulu tangkis adalah cabang olahraga permainan yang bisa dilakukan di luar maupun dalam ruangan.</p>
          <p class="go-button">Go</p>
        </div>
      </div>
    </div>
  </div>
  
  <footer class="footer">
    <img src="images/logokuyfit.png" alt="Logo">
    <div class="menu">
      <a href="#">Menu</a>
      <a href="#">Home</a>
      <a href="#">Explore</a>
      <a href="#">Orders</a>
    </div>
    <div class="contact-info">
      Contact Info: kuyfit@gmail.com
    </div>
    <div class="location">
      Keputih, Surabaya
    </div>
  </footer>
</body>
</html>