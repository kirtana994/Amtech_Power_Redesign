```php id="z8x0aj"
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


require 'db.php';
require_once 'config.php';

if(isset($_POST['submit'])){

    // Basic Info
    $company = $_POST['company'];
    $contact_name = $_POST['contact_name'];
    $project_name = $_POST['project_name'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    // Generator Output Data
    $power_kva = $_POST['power_kva'];
    $voltage_v = $_POST['voltage_v'];
    $frequency_hz = $_POST['frequency_hz'];
    $power_factor = $_POST['power_factor'];

    // Excitation Field Data
    $curr_no_load = $_POST['curr_no_load'];
    $volt_no_load = $_POST['volt_no_load'];
    $curr_full_load = $_POST['curr_full_load'];
    $volt_full_load = $_POST['volt_full_load'];

    // Shunt Excitation
    $quotation_requested = $_POST['quotation_requested'];
    $type = $_POST['type'];
    $vp_off_gen_terminals = $_POST['vp_off_gen_terminals'];
    $available_voltage = $_POST['available_voltage'];
    $protection_cover = $_POST['protection_cover'];
    $ral_color = $_POST['ral_color'];
    $ip_rating = $_POST['ip_rating'];
    $protection = $_POST['protection'];
    $temperature_probes = $_POST['temperature_probes'];
    $current_transformers = $_POST['current_transformers'];
    $space_limitations = $_POST['space_limitations'];
    $max_space_available = $_POST['max_space_available'];

    // PT Ratio
    $primary_voltage = $_POST['primary_voltage'];
    $secondary_voltage = $_POST['secondary_voltage'];
    $app_power = $_POST['app_power'];
    $phase_type = $_POST['phase_type'];

    // CT Ratio
    $primary_current = $_POST['primary_current'];
    $secondary_current = $_POST['secondary_current'];
    $burden = $_POST['burden'];
    $plugged_on_v_phase = $_POST['plugged_on_v_phase'];

    // Control & Flashing
    $control_power = $_POST['control_power'];
    $field_flashing = $_POST['field_flashing'];

    // Enclosure Space
    $constraints = $_POST['constraints'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $depth = $_POST['depth'];

    // Other Specifics
    $power_electronics = $_POST['power_electronics'];
    $control_electronics = $_POST['control_electronics'];
    $rotor_earth_fault_relay = $_POST['rotor_earth_fault_relay'];
    $power_system_stabilizer = $_POST['power_system_stabilizer'];

    // Other Information
    $destination = $_POST['destination'];
    $end_customer = $_POST['end_customer'];
    $prime_mover = $_POST['prime_mover'];
    $oem = $_POST['oem'];
    $qty = $_POST['qty'];
    $competition = $_POST['competition'];
    $budget = $_POST['budget'];
    $spec = $_POST['spec'];
    $delivery = $_POST['delivery'];
    $special_conditions = $_POST['special_conditions'];

    // Insert Query
    $sql = "INSERT INTO rfq_data (

        company,
        contact_name,
        project_name,
        address,
        tel,
        email,

        power_kva,
        voltage_v,
        frequency_hz,
        power_factor,

        curr_no_load,
        volt_no_load,
        curr_full_load,
        volt_full_load,

        quotation_requested,
        type,
        vp_off_gen_terminals,
        available_voltage,
        protection_cover,
        ral_color,
        ip_rating,
        protection,
        temperature_probes,
        current_transformers,
        space_limitations,
        max_space_available,

        primary_voltage,
        secondary_voltage,
        app_power,
        phase_type,

        primary_current,
        secondary_current,
        burden,
        plugged_on_v_phase,

        control_power,
        field_flashing,

        constraints,
        height,
        width,
        depth,

        power_electronics,
        control_electronics,
        rotor_earth_fault_relay,
        power_system_stabilizer,

        destination,
        end_customer,
        prime_mover,
        oem,
        qty,
        competition,
        budget,
        spec,
        delivery,
        special_conditions

    ) VALUES (

        '$company',
        '$contact_name',
        '$project_name',
        '$address',
        '$tel',
        '$email',

        '$power_kva',
        '$voltage_v',
        '$frequency_hz',
        '$power_factor',

        '$curr_no_load',
        '$volt_no_load',
        '$curr_full_load',
        '$volt_full_load',

        '$quotation_requested',
        '$type',
        '$vp_off_gen_terminals',
        '$available_voltage',
        '$protection_cover',
        '$ral_color',
        '$ip_rating',
        '$protection',
        '$temperature_probes',
        '$current_transformers',
        '$space_limitations',
        '$max_space_available',

        '$primary_voltage',
        '$secondary_voltage',
        '$app_power',
        '$phase_type',

        '$primary_current',
        '$secondary_current',
        '$burden',
        '$plugged_on_v_phase',

        '$control_power',
        '$field_flashing',

        '$constraints',
        '$height',
        '$width',
        '$depth',

        '$power_electronics',
        '$control_electronics',
        '$rotor_earth_fault_relay',
        '$power_system_stabilizer',

        '$destination',
        '$end_customer',
        '$prime_mover',
        '$oem',
        '$qty',
        '$competition',
        '$budget',
        '$spec',
        '$delivery',
        '$special_conditions'
    )";

if(mysqli_query($conn, $sql)){


        $mail = new PHPMailer(true);
        try{
        $mail->isSMTP();
          
            $mail->SMTPAuth = true;
            $mail->Host = MAIL_HOST;
            $mail->Username = MAIL_USER;
            $mail->Password = MAIL_PASS;
            $mail->Port = MAIL_PORT;
            $mail->SMTPSecure = MAIL_SECURE;

            $mail->Port = MAIL_PORT;


        $mail->setFrom(
            'kirtana.09kichmbare@gmail.com',
            'Amtech Power RFQ'
        );

        $mail->addAddress(
            COMPANY_EMAIL
        );

        $mail->addReplyTo(
            $email,
            $contact_name
        );


    // Mail Content
    $mail->isHTML(true);

    $mail->Subject = 'Amtech Power New RFQ Form Submission';
    $mail->Body = "

    <h2>Amtech Power New RFQ Form Submission</h2>

    <table border='1' cellpadding='10' cellspacing='0' width='100%'>

        <tr>
            <td><b>Company</b></td>
            <td>$company</td>
        </tr>

        <tr>
            <td><b>Contact Name</b></td>
            <td>$contact_name</td>
        </tr>

        <tr>
            <td><b>Project Name</b></td>
            <td>$project_name</td>
        </tr>

        <tr>
            <td><b>Address</b></td>
            <td>$address</td>
        </tr>

        <tr>
            <td><b>Telephone</b></td>
            <td>$tel</td>
        </tr>

        <tr>
            <td><b>Email</b></td>
            <td>$email</td>
        </tr>

        <tr>
            <td><b>Power kVA</b></td>
            <td>$power_kva</td>
        </tr>

        <tr>
            <td><b>Voltage</b></td>
            <td>$voltage_v</td>
        </tr>

        <tr>
            <td><b>Frequency</b></td>
            <td>$frequency_hz</td>
        </tr>

        <tr>
            <td><b>Power Factor</b></td>
            <td>$power_factor</td>
        </tr>

        <tr>
            <td><b>Current at No Load</b></td>
            <td>$curr_no_load</td>
        </tr>

        <tr>
            <td><b>Voltage at No Load</b></td>
            <td>$volt_no_load</td>
        </tr>

        <tr>
            <td><b>Current at Full Load</b></td>
            <td>$curr_full_load</td>
        </tr>

        <tr>
            <td><b>Voltage at Full Load</b></td>
            <td>$volt_full_load</td>
        </tr>

        <tr>
            <td><b>Quotation Requested</b></td>
            <td>$quotation_requested</td>
        </tr>

        <tr>
            <td><b>Type</b></td>
            <td>$type</td>
        </tr>

        <tr>
            <td><b>VP Off Gen Terminals</b></td>
            <td>$vp_off_gen_terminals</td>
        </tr>

        <tr>
            <td><b>Available Voltage</b></td>
            <td>$available_voltage</td>
        </tr>

        <tr>
            <td><b>Protection Cover</b></td>
            <td>$protection_cover</td>
        </tr>

        <tr>
            <td><b>RAL Color</b></td>
            <td>$ral_color</td>
        </tr>

        <tr>
            <td><b>IP Rating</b></td>
            <td>$ip_rating</td>
        </tr>

        <tr>
            <td><b>Protection</b></td>
            <td>$protection</td>
        </tr>

        <tr>
            <td><b>Temperature Probes</b></td>
            <td>$temperature_probes</td>
        </tr>

        <tr>
            <td><b>Current Transformers</b></td>
            <td>$current_transformers</td>
        </tr>

        <tr>
            <td><b>Space Limitations</b></td>
            <td>$space_limitations</td>
        </tr>

        <tr>
            <td><b>Max Space Available</b></td>
            <td>$max_space_available</td>
        </tr>

        <tr>
            <td><b>Primary Voltage</b></td>
            <td>$primary_voltage</td>
        </tr>

        <tr>
            <td><b>Secondary Voltage</b></td>
            <td>$secondary_voltage</td>
        </tr>

        <tr>
            <td><b>App Power</b></td>
            <td>$app_power</td>
        </tr>

        <tr>
            <td><b>Phase Type</b></td>
            <td>$phase_type</td>
        </tr>

        <tr>
            <td><b>Primary Current</b></td>
            <td>$primary_current</td>
        </tr>

        <tr>
            <td><b>Secondary Current</b></td>
            <td>$secondary_current</td>
        </tr>

        <tr>
            <td><b>Burden</b></td>
            <td>$burden</td>
        </tr>

        <tr>
            <td><b>Plugged on V Phase</b></td>
            <td>$plugged_on_v_phase</td>
        </tr>

        <tr>
            <td><b>Control Power</b></td>
            <td>$control_power</td>
        </tr>

        <tr>
            <td><b>Field Flashing</b></td>
            <td>$field_flashing</td>
        </tr>

        <tr>
            <td><b>Constraints</b></td>
            <td>$constraints</td>
        </tr>

        <tr>
            <td><b>Height</b></td>
            <td>$height</td>
        </tr>

        <tr>
            <td><b>Width</b></td>
            <td>$width</td>
        </tr>

        <tr>
            <td><b>Depth</b></td>
            <td>$depth</td>
        </tr>

        <tr>
            <td><b>Power Electronics</b></td>
            <td>$power_electronics</td>
        </tr>

        <tr>
            <td><b>Control Electronics</b></td>
            <td>$control_electronics</td>
        </tr>

        <tr>
            <td><b>Rotor Earth Fault Relay</b></td>
            <td>$rotor_earth_fault_relay</td>
        </tr>

        <tr>
            <td><b>Power System Stabilizer</b></td>
            <td>$power_system_stabilizer</td>
        </tr>

        <tr>
            <td><b>Destination</b></td>
            <td>$destination</td>
        </tr>

        <tr>
            <td><b>End Customer</b></td>
            <td>$end_customer</td>
        </tr>

        <tr>
            <td><b>Prime Mover</b></td>
            <td>$prime_mover</td>
        </tr>

        <tr>
            <td><b>OEM</b></td>
            <td>$oem</td>
        </tr>

        <tr>
            <td><b>Quantity</b></td>
            <td>$qty</td>
        </tr>

        <tr>
            <td><b>Competition</b></td>
            <td>$competition</td>
        </tr>

        <tr>
            <td><b>Budget</b></td>
            <td>$budget</td>
        </tr>

        <tr>
            <td><b>Specification</b></td>
            <td>$spec</td>
        </tr>

        <tr>
            <td><b>Lead Time</b></td>
            <td>$delivery</td>
        </tr>

        <tr>
            <td><b>Special Conditions</b></td>
            <td>$special_conditions</td>
        </tr>

    </table>";


    $mail->send();

    echo "
    <script>
        window.location.href='../rfq.php?success=1';
    </script>
    ";

    } catch (Exception $e) {

    echo 'Mailer Error: ' . $mail->ErrorInfo;

}



} else {

    echo "
    <script>
        alert('Submission Failed');
        window.history.back();
    </script>
    ";

}



}

?>
```
