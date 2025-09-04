<?php
//contact management terminal- based App
$contacts = [];

// Function to add a contact
function addContact(array &$contacts, string $name, string $email, string $phone): void {
    $contact[] = ['name' => $name, 'email' => $email, 'phone' => $phone];
}

// Function to display all contact

function displayContacts(array $contacts): void {
    if(empty($contacts)) {
        echo "No contacts available. \n";
    }else {
        foreach ($contacts as $contact){
            echo "Name: {$contact['name']}, Email: {$contact['email']}, Phone: {$contact['phone']}\n";
        }
    }
}

// Terminal-Based interface
while (true) {
    echo "\nContact Mangement Menu: \n";
    echo"1. Add Contact\n2. View Contacts\n3. Exit\n";
    $choice =(int)readline("Choose an option: ");


    if ($choice === 1) {
        $name = readline("Enter name: ");
        $name = readline("Enter email: ");
        $name = readline("Enter phone number: ");
        addContact($contacts, $name, $email, $phone);
        echo "$name added to contacts.\n";
    } elseif ($choice === 2) {
        displayContacts($contacts);
    }elseif ($choice === 3) {
        echo "Exiring...\n";
        break;
    } else {
        echo "Invalid choice. Please try again.\n";
    }
}
