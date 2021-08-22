<?php
    if (!empty($_POST['Television']) && empty($_POST['Console'])  ) {
     $Television_solo = $_POST['Television'];
     $wired_extra_Television_solo = $_POST['wired_extra_Television'];
     $Remote_extra_Television_solo = $_POST['Remote_extra_Television'];
     $total_extra_Television_solo = $wired_extra_Television_solo + $Remote_extra_Television_solo;

     $Television_type_solo = $_POST['Television_type'];

           require('Electronics.php');
           if ($Television_type_solo == 'Toshiba') {
               $Television_solo = new ElectronicItems('4', $Television_solo, '' , 4, 1200, $Television_type_solo);
             ?>
              <style type="text/css">
                table {
                    width: 100%;
                }
                td {
                    padding: 20px;
                     border: 1px solid black;
                }
                thead td {
                    background: black;
                    color: white;
                }
                </style>
                <table>

                    <thead>
                        <tr>
                            <td>Type</td>
                            <td>Product</td>
                            <td>Extras</td>
                            <td>Total Extras</td>
                            <td>Price</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $Television_solo->getProdName(); ?></td>
                            <td><?php echo $Television_solo->getType(); ?></td>
                            <td>Wired Controller : <?php echo $wired_extra_Television_solo; ?>
                                <br>
                                Remote Controller : <?php echo $Remote_extra_Television_solo; ?>
                            </td>
                            <td><?php echo $Television_solo->maxExtra(); ?></td>
                            <td>₱ <?php echo $Television_solo->getPrice(); ?></td>
                        </tr>
                        <tr>
                            <td class="total">Total:</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total Price: ₱ <?php echo $Television_solo->getPrice(); ?></td>
                        </tr>
                    </tbody>
                </table>

                <?php 
           }else{
                 $Television_solo = new ElectronicItems('4', $Television_solo, '' , 4, 500, $Television_type_solo);
             ?>
              <style type="text/css">
                table {
                    width: 100%;
                }
                td {
                    padding: 20px;
                     border: 1px solid black;
                }
                thead td {
                    background: black;
                    color: white;
                }
                </style>
                <table>

                    <thead>
                        <tr>
                            <td>Type</td>
                            <td>Product</td>
                            <td>Extras</td>
                            <td>Total Extras</td>
                            <td>Price</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $Television_solo->getProdName(); ?></td>
                            <td><?php echo $Television_solo->getType(); ?></td>
                            <td>Wired Controller : <?php echo $wired_extra_Television_solo; ?>
                                <br>
                                Remote Controller : <?php echo $Remote_extra_Television_solo; ?>
                            </td>
                            <td><?php echo $Television_solo->maxExtra(); ?></td>
                            <td>₱ <?php echo $Television_solo->getPrice(); ?></td>
                        </tr>
                        <tr>
                            <td class="total">Total:</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total Price: ₱ <?php echo $Television_solo->getPrice(); ?></td>
                        </tr>
                    </tbody>
                </table>
                <?php 
           }
           
    }

    if (!empty($_POST['Console']) && empty($_POST['Television'])  ) {
         $console_solo_name = $_POST['Console'];
         $wired_extra_console_solo = $_POST['wired_extra_console'];
         $remote_extra_console_solo = $_POST['remote_extra_console'];
         $total_extra_solo =  $remote_extra_console_solo + $wired_extra_console_solo;
         $console_type_solo = $_POST['console_type'];

           require('Electronics.php');
           $console_solo = new ElectronicItems('4', $console_solo_name, '' , 4, 900, $console_type_solo);

           if ( $total_extra_solo > $console_solo->maxExtra() ) {
                echo "Console Extra reach the Limit";
             }else{

                ?>

                    <style type="text/css">
                table {
                    width: 100%;
                }
                td {
                    padding: 20px;
                     border: 1px solid black;
                }
                thead td {
                    background: black;
                    color: white;
                }
                </style>
                <table>

                    <thead>
                        <tr>
                            <td>Type</td>
                            <td>Product</td>
                            <td>Extras</td>
                            <td>Total Extras</td>
                            <td>Price</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $console_solo->getProdName(); ?></td>
                            <td><?php echo $console_solo->getType(); ?></td>
                            <td>Wired Controller : <?php echo $wired_extra_console_solo; ?>
                                <br>
                                Remote Controller : <?php echo $remote_extra_console_solo; ?>
                            </td>
                            <td><?php echo $console_solo->maxExtra(); ?></td>
                            <td>₱ <?php echo $console_solo->getPrice(); ?></td>
                        </tr>
                        <tr>
                            <td class="total">Total:</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total Price: ₱ <?php echo $console_solo->getPrice(); ?></td>
                        </tr>
                    </tbody>
                </table>

                <?php 

             }
     

    }
 
    if (!empty($_POST['Microwave'])) {
       $Microwave = $_POST['Microwave'];
       require('Electronics.php');
       $Microwaves = new ElectronicItems('1', $Microwave, '' , 4, 900, 'Hanabishi');
       ?>
         <style type="text/css">
                table {
                    width: 100%;
                }
                td {
                    padding: 20px;
                     border: 1px solid black;
                }
                thead td {
                    background: black;
                    color: white;
                }
                </style>
                <table>

                    <thead>
                        <tr>
                            <td>Type</td>
                            <td>Product</td>
                            <td>Extras</td>
                            <td>Total Extras</td>
                            <td>Price</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $Microwaves->getProdName(); ?></td>
                            <td><?php echo $Microwaves->getType(); ?></td>
                            <td>No Extras</td>
                            <td>No Extras</td>
                            <td>₱ <?php echo $Microwaves->getPrice(); ?></td>
                        </tr>
                        <tr>
                            <td class="total">Total:</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total Price: ₱ <?php echo $Microwaves->getPrice(); ?></td>
                        </tr>
                    </tbody>
                </table>

       <?php 

    }



    if (!empty($_POST['Console']) && !empty($_POST['Television'])) {

     $console = $_POST['Console'];
     $wired_extra_console = $_POST['wired_extra_console'];
     $remote_extra_console = $_POST['remote_extra_console'];
     $total_extra =  $remote_extra_console + $wired_extra_console;
     $console_type = $_POST['console_type'];

     $Television = $_POST['Television'];

     $wired_extra_Television = $_POST['wired_extra_Television'];
     $Remote_extra_Television = $_POST['Remote_extra_Television'];
     $total_extra_Television = $wired_extra_Television + $Remote_extra_Television;

     $Television_type = $_POST['Television_type'];
   try {
            
       require('Electronics.php');
        if ($Television_type == 'Sony') {
             $console = new ElectronicItems('1', $console, '' , 4, 900, $console_type);

             if ( $total_extra > $console->maxExtra() ) {
                echo "Console Extra reach the Limit";
             }else{
                $television_type_one = new ElectronicItems('2', $Television , '' , $total_extra_Television, 500 , $Television_type);
            ?>
                <style type="text/css">
                table {
                    width: 100%;
                }
                td {
                    padding: 20px;
                     border: 1px solid black;
                }
                thead td {
                    background: black;
                    color: white;
                }
                </style>
                <table>

                    <thead>
                        <tr>
                            <td>Type</td>
                            <td>Product</td>
                            <td>Extras</td>
                            <td>Total Extras</td>
                            <td>Price</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $console->getProdName(); ?></td>
                            <td><?php echo $console->getType(); ?></td>
                            <td>Wired Controller : <?php echo $wired_extra_console; ?>
                                <br>
                                Remote Controller : <?php echo $remote_extra_console; ?>
                            </td>
                            <td><?php echo $console->maxExtra(); ?></td>
                            <td>₱ <?php echo $console->getPrice(); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $television_type_one->getProdName(); ?></td>
                            <td><?php echo $television_type_one->getType(); ?></td>
                            <td>Wired Controller : <?php echo $wired_extra_console; ?>
                            <br>
                                Remote Controller : <?php echo $remote_extra_console; ?>
                            </td>
                            <td><?php echo $console->maxExtra(); ?></td>
                            <td>₱ <?php echo $television_type_one->getPrice(); ?></td>
                        </tr>
                        <tr>
                            <td class="total">Total:</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total Price: ₱ <?php echo $television_type_one->getPrice() + $console->getPrice(); ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php
             }

             
          }
          if ($Television_type == 'Toshiba') {
             $console = new ElectronicItems('1', $console, '' , 4, 900, $console_type);
             $television_type_one = new ElectronicItems('2', $Television , '' , $total_extra_Television, 1200 , $Television_type);
            ?>
                <style type="text/css">
                table {
                    width: 100%;
                }
                td {
                    padding: 20px;
                     border: 1px solid black;
                }
                thead td {
                    background: black;
                    color: white;
                }
                </style>
                <table>

                    <thead>
                        <tr>
                            <td>Type</td>
                            <td>Product</td>
                            <td>Extras</td>
                            <td>Total Extras</td>
                            <td>Price</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $console->getProdName(); ?></td>
                            <td><?php echo $console->getType(); ?></td>
                            <td>Wired Controller : <?php echo $wired_extra_console; ?>
                                <br>
                                Remote Controller : <?php echo $remote_extra_console; ?>
                            </td>
                            <td><?php echo $console->maxExtra(); ?></td>
                            <td>₱ <?php echo $console->getPrice(); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $television_type_one->getProdName(); ?></td>
                            <td><?php echo $television_type_one->getType(); ?></td>
                            <td>Wired Controller : <?php echo $wired_extra_console; ?>
                            <br>
                                Remote Controller : <?php echo $remote_extra_console; ?>
                            </td>
                            <td><?php echo $console->maxExtra(); ?></td>
                            <td>₱ <?php echo $television_type_one->getPrice(); ?></td>
                        </tr>
                        <tr>
                            <td class="total">Total:</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total Price: ₱ <?php echo $television_type_one->getPrice() + $console->getPrice(); ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php

          }

        }catch (Exception $e) {
        // Handle the exception.
        }
    }

?>