<?php
/**
 * PROGUARD Professional Pest Control Services - Local Development Database Intake Pipeline
 * Target Environment: XAMPP Localhost Server Environment
 */

// 1. Enforce strict live debugging to safely log any runtime database issues onto the screen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Local XAMPP Database Connection Parameters
$servername = "localhost";   
$username   = "root";        
$password   = "";            
$dbname     = "db_proguard"; // Ensure this matches your phpMyAdmin database name exactly

// Establish relational connection instance
$conn = new mysqli($servername, $username, $password, $dbname);

// Verify live link connection status
if ($conn->connect_error) {
    die("❌ Local XAMPP DB connection failed: " . $conn->connect_error);
}

// Guarantee perfect character set alignments for location values
$conn->set_charset("utf8mb4");

// 3. Process the dataset sent from your JavaScript background Fetch pipeline
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize inbound text values
    $ticket_number  = isset($_POST['ticket_number']) ? $conn->real_escape_string(trim($_POST['ticket_number'])) : 'PG-UNKNOWN';
    $client_name    = isset($_POST['client_name']) ? $conn->real_escape_string(trim($_POST['client_name'])) : '';
    $mobile_number  = isset($_POST['mobile_number']) ? $conn->real_escape_string(trim($_POST['mobile_number'])) : '';
    $treatment_type = isset($_POST['treatment_type']) ? $conn->real_escape_string(trim($_POST['treatment_type'])) : '';
    $property_scale = isset($_POST['property_scale']) ? $conn->real_escape_string(trim($_POST['property_scale'])) : '';
    $price_estimate = isset($_POST['price_estimate']) ? floatval($_POST['price_estimate']) : 0.00;
    $property_notes = isset($_POST['property_notes']) ? $conn->real_escape_string(trim($_POST['property_notes'])) : '';

    // Enforce form compliance check before writing rows
    if (empty($client_name) || empty($treatment_type)) {
        die("❌ Input validation failed: Crucial parameters are missing.");
    }

    // Generate automatic account programmatic fallbacks 
    $email_placeholder = strtolower(preg_replace('/\s+/', '', $client_name)) . rand(10,99) . "@proguard.local";
    $secure_password   = password_hash("ProGuardEntry2026!", PASSWORD_BCRYPT);
    
    // Execute atomic sequential query transaction
    $conn->begin_transaction();

    try {
        // STEP A: Store basic client account criteria into 'users'
        $user_sql = "INSERT INTO users (full_name, email, password_hash, phone_number, role) 
                     VALUES ('$client_name', '$email_placeholder', '$secure_password', '$mobile_number', 'client')";
        if (!$conn->query($user_sql)) { 
            throw new Exception("Users insertion failure: " . $conn->error); 
        }
        $new_user_id = $conn->insert_id; 

        // STEP B: Process the geographic zone destination from landmarks (Chawama or Kamwala fallback)
        $zone_area = (stripos($property_notes, 'Chawama') !== false) ? 'Chawama' : 'Kamwala';
        
        $profile_sql = "INSERT INTO client_profiles (user_id, company_name, physical_address, zone_area, account_status) 
                        VALUES ($new_user_id, '$property_scale', '$property_notes', '$zone_area', 'active')";
        if (!$conn->query($profile_sql)) { 
            throw new Exception("Profiles insertion failure: " . $conn->error); 
        }
        $new_profile_id = $conn->insert_id;

        // STEP C: Populate logging matrix details into 'incident_logs'
        $concatenated_details = "Ticket ID: " . $ticket_number . " | Scale Matrix: " . $property_scale . " | Operational Notes: " . $property_notes . " | Price Quote: ZMW " . $price_estimate;
        
        $incident_sql = "INSERT INTO incident_logs (client_id, incident_type, severity_level, details, status) 
                         VALUES ($new_profile_id, '$treatment_type', 'medium', '$concatenated_details', 'reported')";
        if (!$conn->query($incident_sql)) { 
            throw new Exception("Incident logs insertion failure: " . $conn->error); 
        }

        // Finalize transaction completely across your relational engine
        $conn->commit();
        echo "✅ Data successfully logged to XAMPP database! User Record ID: " . $new_user_id;

    } catch (Exception $e) {
        // Rollback if something breaks
        $conn->rollback();
        echo "❌ Database Error: " . $e->getMessage();
    }

    $conn->close();
} else {
    echo "⚠️ System Alert: Direct browser entry prohibited. Awaiting secure form submission.";
}
?>