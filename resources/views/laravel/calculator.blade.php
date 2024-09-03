<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <h1 class ="font-bold text-center uppercase mb-10">Arithmetic Calculator Diay Ni</h1>
    <div class="mx-auto mt-5 text-center">
        <form action="">
            <label for="num1" class="">Enter Number 1: </label>
            <input type="number" min ="0" name="number1" id="num1" class="mb-2">
            <br>
            <label for="num2" class="">Enter Number 2: </label>
            <input type="number" min ="0" name="number2" id="num2">
            <br>
        <select id="operator" onchange="calculateSum()" class="mx-auto mt-5 text-center">
            <option value="+">SUM</option>
            <option value="-">MINUS</option>
            <option value="*">MULTIPLY</option>
            <option value="/">DIVIDE</option>
        </select>
        <!-- <button class="flex justify-center bg-blue-500 
            text-white px-2 py-2 hover:bg-blue-800 mx-auto mt-5" onclick="calculateSum()"> Submit </button> -->
        </form>
        <p id="demo"></p>
    <script>
        function calculateSum(){
            const num1 = parseFloat(document.getElementById('num1').value);
            const num2 = parseFloat(document.getElementById('num2').value);
            var operator = document.getElementById("operator").value;
            var result;
            if(operator == '+'){
                result = num1 + num2;
            }
            else if(operator == '-'){
                result = num1 - num2;
            }
            else if(operator == '*'){
                result = num1 * num2;
            }
            else if(operator == '/'){
                result = num1 / num2;
            }
            if(isNaN(result)){
                result = "No INPUT!";
            }

            document.getElementById('demo').textContent = 'Result: ' + result;
        }
    </script>
    </div>
</body>
</html>