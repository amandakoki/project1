<?php 
include_once ("templates/heading.php"); 
include_once ("templates/nav.php"); ?>

    <div class="banner">
        <h1 style="font-style:inherit; color:#000000 ;">My Books</h1>
    </div>

    <p>
        Here, you will find:
        <ul>
            <li>Books you've already read</li>
            <li>Books you've saved to your TBR(to be read) list</li>
            <li>Reviews you've made</li>
            <li>Reviews made by authors you follow</li>
            <li>Reviews made by other readers you follow</li>
        </ul>
    </p>

    
    <table border="1px" style="border: 1px solid color: #000; border-collapse{collapse:">
        <tr>
            <th colspan="2">Item Name</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total Price</th>
        </tr>
        
        <tr>
            <td>1.</td>
            <td>Novel</td>
            <td>2</td>
            <td>ksh 1000</td>
            <td>2000</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Classics collection</td>
            <td>1</td>
            <td>ksh 350</td>
            <td>350</td>
        </tr>
        <tr>
            <th colspan="4">Total</th>
            <th>ksh 2350</th>
        </tr>
    </table>

    <?php include_once("templates/footer.php"); ?>

</body>
</html>