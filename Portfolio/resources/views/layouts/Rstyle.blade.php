<style>

/* @import url("http://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"); */

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: url("Image/img.jpg") no-repeat; 
  background-size: cover;
  background-position: center;
}

.wrapper{
  width: 750px;
  background: rgba(255, 255, 255, .1);
  border: 2px solid rgba(255, 255, 255, .2);
  box-shadow: 0 0 10px rgba(0, 0, 0, .2);
  backdrop-filter:blur(20px) brightness(85%);
  border-radius: 10px;
  color: #fff;
  padding: 40px 35px 55px;
  margin: 0 10px;
}

.wrapper h1{
  font-size: 36px;
  text-align: center;
  margin-bottom: 20px;
}

.wrapper .input-box{
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.input-box .input-field{
  position: relative;
  width: 48%;
  height: 50px;
  margin: 13px 0;
}

.input-box .input-field input{
  width: 100%;
  height: 100%;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, .2);
  outline: none;
  font-size: 16px;
  color: #fff;
  border-radius: 6px;
  padding: 15px 15px 15px 40px;
}

.input-box .input-field input::placeholder{
  color: #fff;
}

.input-box .input-field i{
  position: absolute;
  left: 15px;
  top: 50%; 
  transform: translateY(-50%);
  font-size: 20px;
}


.wrapper label{ 
   display: inline-block;
   font-size: 14.5px;
   margin: 10px 0 23px;
}

.wrapper label input{
  accent-color: #fff;
  margin-right: 5px;
}

.wrapper .btn{
  width: 100%;
  height: 45px;
  background: #fff;
  border: none;
  outline: none;
  border-radius: 6px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 1);
  cursor: pointer;
  font-size: 16px;
  color: #333;
  font-weight: 600;
}

.btn:hover {
  background-color:rgb(106, 99, 168);
  transition: 0.7s;
}
 
@media (max-width: 576px){
  .input-box .input-field{
    width: 100%;
    margin: 10px 0;
  }
}
</style>