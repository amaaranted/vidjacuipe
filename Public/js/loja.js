if (document.readyState == "loading") {
    document.addEventListener("DOMContentLoaded", ready)
} else {
    ready()
}

var totalAmount = "0,00"

function ready() {
    const removeProductButtons = document.getElementsByClassName("btn-remove-cart")
    console.log(removeProductButtons)
    for (i = 0; i < removeProductButtons.length; i++) {
        removeProductButtons[i].addEventListener("click", removeProduct)
    }

    const quantityInputs = document.getElementsByClassName("cart-product-qtd")
    for (var i = 0; i < quantityInputs.length; i++) {
        quantityInputs[i].addEventListener("change", checkIfInputIsNull)
    }

    const addToCartButtons = document.getElementsByClassName("btn-add-cart")
    for (var i = 0; i < addToCartButtons.length; i++) {
        addToCartButtons[i].addEventListener("click", addProductToCart)
    }

    const purchaseButton = document.getElementsByClassName("btn-finality")[0]
    purchaseButton.addEventListener("click", makePurchase)

    const buttonRemoveAll = document.getElementsByClassName("btn-remove-all")[0]
    buttonRemoveAll.addEventListener("click", removeAll)

}

function makePurchase() {
    if (totalAmount === "0,00") {
        console.log(totalAmount)
        alert("Seu carrinho está vazio!")
    } else if (totalAmount === "0.00") {
        console.log(totalAmount)
        alert("Seu carrinho está vazio!")
    } else {
        console.log(totalAmount)
        alert(
            `
            Obrigado pela sua compra!
            Valor total do pedido R$ ${totalAmount.replace(".", ",")}
            Volte sempre!
            `)
            location.href = 'fechamento_endereco.php?t=' + totalAmount.replace(".", ",")
            console.log(totalAmount)
            document.getElementsByClassName("cart-total").innerText = "Valor da Compra: " + totalAmount.replace(".", ",")
    }
}

function removeAll() {
    var removeTotaly = document.getElementById("cart-complete")
    while (removeTotaly.firstChild) {
        removeTotaly.removeChild(removeTotaly.firstChild)
        updateTotal()
    }
}

function checkIfInputIsNull(event) {
    //console.log(event.target)
    if (event.target.value === "0") {
        event.target.parentElement.parentElement.remove()
    }
    updateTotal()

}

function addProductToCart(event) {
    const button = event.target
    const productInfos = button.parentElement.parentElement
    //console.log(productInfos)
    const productImage = productInfos.getElementsByClassName("card-img-top")[0].src
    //console.log(productImage)
    const productTitle = productInfos.getElementsByClassName("cart-title")[0].innerText
    //console.log(productTitle)
    const productPrice = productInfos.getElementsByClassName("cart-value")[0].innerText
    //console.log(productPrice)

    const productsCartName = document.getElementsByClassName("cart-product-title")
    for (var i = 0; i < productsCartName.length; i++) {
        if (productsCartName[i].innerText === productTitle) {
            //console.log(productsCartName)
            productsCartName[i].parentElement.getElementsByClassName("cart-product-qtd")[0].value++
            updateTotal()
            return
        }
    }

    let newCartProduct = document.createElement("tr")
    newCartProduct.classList.add("cart-product")

    newCartProduct.innerHTML =
        `<td style="text-align: center">
        <div class="imgProduto">
            <img src="${productImage}" class="img-thumbnail produtoMiniatura" style="width: 120px; height: 90px; text-align: center">
        </div>
    </td>
    <td class="cart-product-title" style="text-align: center">${productTitle}</td>
    <td class="cart-product-price" style="text-align: center">${productPrice}</td>
    <td style="text-align: center">
        <input class="cart-product-qtd" type="number" value="1" min="0" max="100" style="width: 52px; height: 30px;">
    </td>
    <td style="text-align: center"><button class="bottom-card btn btn-danger btn-md mb-1 btn-remove-cart"> Remover </button></td>`

    const tableBody = document.querySelector(".cart-table tbody")
    tableBody.append(newCartProduct)
    updateTotal()
    //console.log(newCartProduct)
    newCartProduct.getElementsByClassName("cart-product-qtd")[0].addEventListener("change", checkIfInputIsNull)
    newCartProduct.getElementsByClassName("btn-remove-cart")[0].addEventListener("click", removeProduct)

}

function removeProduct(event) {
    event.target.parentElement.parentElement.remove()
    event.target.parentElement.remove()
    updateTotal()
}

function updateTotal() {
    totalAmount = 0
    const cartProducts = document.getElementsByClassName("cart-product")
    for (i = 0; i < cartProducts.length; i++) {
        //console.log(cartProducts[i])
        const productPrice = cartProducts[i].getElementsByClassName("cart-product-price")[0].innerText.replace("R$ ", "").replace(",", ".")
        //console.log(productPrice)
        const productQuantity = cartProducts[i].getElementsByClassName("cart-product-qtd")[0].value
        //console.log(productQuantity)
        totalAmount += productPrice * productQuantity
    }
    //console.log(totalAmount)
    totalAmount = totalAmount.toFixed(2)
    document.querySelector(".cart-total div h4").innerText = "Total de Produtos R$ " + totalAmount.replace(".", ",")
    //document.querySelector(".cart-total2 h4").innerText = "Valor da Compra: " + totalAmount.replace(".", ",")
    //console.log(totalAmount)
}
