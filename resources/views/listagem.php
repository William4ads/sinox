<?php 

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <body>
        <h1>Listagem dos produtos</h1>
        <table> 
            <?php foreach ($produtos as $p): ?>
            <tr>
                <td> <?= $p->id ?> </td>
                <td> <?= $p->produto ?> </td>
                <td> <?= $p->descricao ?> </td>
            </tr>
            <?php endforeach; ?>
        </table>    
    </body>
</html>    
