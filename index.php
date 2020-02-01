<!DOCTYPE html>
<html>
	<head>
		<style>
			body {
				background-color: maroon;
				text-align: center;
			}

			.button {
				background-color: yellow;
				font-size: 30px;
					
			}
			
			.button:hover {
				background-color: black;
				color: red;
			}
		</style>	
	</head>
	<body>
		<h1>Rock 💀 Paper 💀 Scissors</h1>
		<h2>Choose your champion!</h2>
		<button class="button" value="Rock">Rock</button>
		<button class="button" value="Paper">Paper</button>
		<button class="button" value="Scissors">Scissors</button>
		<br>
	<script>
window.onload = ()=> {
		let choices = ["Rock", "Paper", "Scissors"]
		let  computer = choices[Math.floor(Math.random() * choices.length)]
		let buttons = document.querySelectorAll(".button")
		buttons.forEach(btn => {
			btn.addEventListener("click", (e)=>{
				let value = e.target.value
				if (value == "Rock" && computer == "Scissors") {
					alert("You win!!", function(){ window.location.reload()})
				} else if (value == "Paper" && computer == "Rock") {
					alert("You win!!")
				} else if (value == "Scissors" && computer == "Paper") {
					alert("You win!!")
				} else if (value == computer) {
					alert("It's a tie")
				} else {
					alert("You lose!! ☹️ ")	
				}
			})
		})
		}
	</script>
	</body>

</html>
