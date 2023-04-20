<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>

<body>
        <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="payment-method">
                <div class="card">
                    <a href="{{ route('stripe') }}">
                        <div>
                            <i class="fa-brands fa-cc-visa fa-2xl" style="color: #000000;"></i>
                            <i class="fa-brands fa-cc-mastercard fa-2xl" style="color: #241f31;"></i>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="{{ route('createTransaction') }}">
                        <i class="fa-brands fa-cc-paypal fa-2xl" style="color: #1a5fb4;"></i>
                    </a>
                </div>
            
            </div>
        </div>
    
    </div>
    <div>
        <img src="{{asset("images/main.jpg")}}" alt="" width="65%">
        <button class="button-73" role="button" id="myBtn">Donate</button>
    </div>
</body>

<script>
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 
</script>

</html>
