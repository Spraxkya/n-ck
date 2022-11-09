<head>
    <title>På nätet</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="./styles/marketing.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <script type="text/javascript" src="./scripts/marketing.js" async></script>
</head>
<div id="book" class="Z">
    <?php
        $firstDate= new DateTime('U');
        $secondDate = new DateTime('+1 days');
        $thirdDate = new DateTime('+2 days');
        $fourthDate = new DateTime('+3 days');
        $fiftDate = new DateTime('+4 days');
    ?>
    <h1 class="h1_black"> Boka en tid </h1>
    <table>
        <tr>
            <th><?php
                if($firstDate->format('l') === 'Monday') {
                    echo 'Måndag';
                }
                if($firstDate->format('l') === 'Tuesday') {
                    echo 'Tisdag';
                } 
                if($firstDate->format('l') === 'Wednesday') {
                    echo 'Onsdag';
                } 
                if($firstDate->format('l') === 'Thursday') {
                    echo 'Torsdag';
                } 
                if($firstDate->format('l') === 'Friday') {
                    echo 'Fredag';
                }
                if($firstDate->format('l') === 'Saturday') {
                    $firstDate = new DateTime('+2 days');
                    if($firstDate->format('l') === 'Monday') {
                        echo 'Måndag';
                    }
                }
            ?>

            <br><?php echo $firstDate->format('j/n')?></th>
            <th><?php
                if($secondDate->format('l') === 'Monday') {
                    echo 'Måndag';
                }
                if($secondDate->format('l') === 'Tuesday') {
                    echo 'Tisdag';
                } 
                if($secondDate->format('l') === 'Wednesday') {
                    echo 'Onsdag';
                } 
                if($secondDate->format('l') === 'Thursday') {
                    echo 'Torsdag';
                } 
                if($secondDate->format('l') === 'Friday') {
                    echo 'Fredag';
                }
                
            ?>
            
            <br><?php echo $secondDate->format('j/n')?></th>
            <th><?php 
                if($thirdDate->format('l') === 'Monday') {
                    echo 'Måndag';
                }
                if($thirdDate->format('l') === 'Tuesday') {
                    echo 'Tisdag';
                } 
                if($thirdDate->format('l') === 'Wednesday') {
                    echo 'Onsdag';
                } 
                if($thirdDate->format('l') === 'Thursday') {
                    echo 'Torsdag';
                } 
                if($thirdDate->format('l') === 'Friday') {
                    echo 'Fredag';
                }            
            ?>
            
            <br><?php echo $thirdDate->format('j/n')?></th>
            <th><?php 
                if($fourthDate->format('l') === 'Monday') {
                    echo 'Måndag';
                }
                if($fourthDate->format('l') === 'Tuesday') {
                    echo 'Tisdag';
                } 
                if($fourthDate->format('l') === 'Wednesday') {
                    echo 'Onsdag';
                } 
                if($fourthDate->format('l') === 'Thursday') {
                    echo 'Torsdag';
                } 
                if($fourthDate->format('l') === 'Friday') {
                    echo 'Fredag';
                }
            ?>
            
            <br><?php echo $fourthDate->format('j/n')?></th>
            <th><?php
                if($fiftDate->format('l') === 'Monday') {
                    echo 'Måndag';
                }
                if($fiftDate->format('l') === 'Tuesday') {
                    echo 'Tisdag';
                } 
                if($fiftDate->format('l') === 'Wednesday') {
                    echo 'Onsdag';
                } 
                if($fiftDate->format('l') === 'Thursday') {
                    echo 'Torsdag';
                } 
                if($fiftDate->format('l') === 'Friday') {
                    echo 'Fredag';
                }
            ?>
            <br><?php echo $fiftDate->format('j/n')?></th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <form>
        <div><label for="epost">E-post:</label><input type="email" id="epost" name="epost"></div>
        <div><label for="tel">Tel.nr:</label><input type="tel" id="tel" name="tel"></div>
        <input type="submit" value="Submit">
    </form>
</div>