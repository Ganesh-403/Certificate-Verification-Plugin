jQuery(document).ready(function($) {
    $('.certificate-link').on('click', function(e) {
        e.preventDefault(); // Prevent the default link behavior
        var certId = $(this).data('id'); // Get the certificate ID
        window.location.hash = certId; // Change the URL hash
        searchCertificate(certId); // Call the function to search for the certificate
    });

    function searchCertificate(certId) {
        // You can implement your search logic here
        // For example, you can make an AJAX call to fetch the certificate details
        // For demonstration, we'll just log the ID
        console.log('Searching for certificate with ID:', certId);
        
        // Example AJAX call (uncomment and modify as needed)
        /*
        $.ajax({
            url: 'your-ajax-endpoint-url',
            method: 'POST',
            data: { id: certId },
            success: function(response) {
                // Handle the response (e.g., display the certificate details)
                console.log(response);
            }
        });
        */
    }
});