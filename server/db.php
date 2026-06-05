<?php

require_once 'config.php';

/*
|--------------------------------------------------------------------------
| CONNECT TO MYSQL SERVER
|--------------------------------------------------------------------------
*/

$conn = mysqli_connect(
    DB_HOST,
    DB_USER,
    DB_PASS
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

/*
|--------------------------------------------------------------------------
| CREATE DATABASE
|--------------------------------------------------------------------------
*/

$sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;

if (!mysqli_query($conn, $sql)) {
    die("Database Creation Failed: " . mysqli_error($conn));
}

mysqli_close($conn);

/*
|--------------------------------------------------------------------------
| CONNECT TO DATABASE
|--------------------------------------------------------------------------
*/

$conn = mysqli_connect(
    DB_HOST,
    DB_USER,
    DB_PASS,
    DB_NAME
);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

/*
|--------------------------------------------------------------------------
| CREATE TABLE
|--------------------------------------------------------------------------
*/

$table = "CREATE TABLE IF NOT EXISTS rfq_data (

    id INT AUTO_INCREMENT PRIMARY KEY,

    company VARCHAR(255),
    contact_name VARCHAR(255),
    project_name VARCHAR(255),
    address TEXT,
    tel VARCHAR(100),
    email VARCHAR(255),

    power_kva VARCHAR(100),
    voltage_v VARCHAR(100),
    frequency_hz VARCHAR(100),
    power_factor VARCHAR(100),

    curr_no_load VARCHAR(100),
    volt_no_load VARCHAR(100),
    curr_full_load VARCHAR(100),
    volt_full_load VARCHAR(100),

    quotation_requested VARCHAR(50),
    type VARCHAR(100),
    vp_off_gen_terminals VARCHAR(100),
    available_voltage VARCHAR(100),
    protection_cover VARCHAR(100),
    ral_color VARCHAR(100),
    ip_rating VARCHAR(100),
    protection VARCHAR(100),
    temperature_probes VARCHAR(100),
    current_transformers VARCHAR(100),
    space_limitations VARCHAR(100),
    max_space_available VARCHAR(100),

    primary_voltage VARCHAR(100),
    secondary_voltage VARCHAR(100),
    app_power VARCHAR(100),
    phase_type VARCHAR(100),

    primary_current VARCHAR(100),
    secondary_current VARCHAR(100),
    burden VARCHAR(100),
    plugged_on_v_phase VARCHAR(100),

    control_power VARCHAR(255),
    field_flashing VARCHAR(255),

    constraints VARCHAR(255),
    height VARCHAR(100),
    width VARCHAR(100),
    depth VARCHAR(100),

    power_electronics VARCHAR(100),
    control_electronics VARCHAR(100),
    rotor_earth_fault_relay VARCHAR(100),
    power_system_stabilizer VARCHAR(100),

    destination VARCHAR(255),
    end_customer VARCHAR(255),
    prime_mover VARCHAR(255),
    oem VARCHAR(255),
    qty VARCHAR(100),
    competition VARCHAR(255),
    budget VARCHAR(255),
    spec VARCHAR(255),
    delivery VARCHAR(255),

    special_conditions TEXT,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

)";

if (!mysqli_query($conn, $table)) {
    die("Table Creation Failed: " . mysqli_error($conn));
}

?>