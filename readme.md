# Certificate Verification Plugin

A lightweight and efficient WordPress plugin that enables administrators to manage course certificates and allows users to verify them using a unique certificate code. Ideal for educational institutions, training centers, and online courses.

## 🚀 Features
- **Admin Dashboard** – Manage certificate records with ease.
- **Search & Verify** – Users can enter a certificate code to check authenticity.
- **Multi-Parameter Search** – Search by:
  - Certificate Code
  - Student Name
  - Course Name
  - Course Duration
  - Award Date
- **Shortcode Integration** – Easily add a search form anywhere using `[certificate_verification_form]`.
- **Bulk CSV Upload** – Import multiple certificates at once.
- **Secure & Reliable** – Ensures data integrity and prevents duplication.
- **Optimized Performance** – Lightweight and fast.

## 📌 Installation
### 1. Install via WordPress Admin
1. **Download & Upload:**
   - Download the plugin ZIP file.
   - Go to `Plugins → Add New → Upload Plugin`.
   - Upload `certificate-verification.zip`.
2. **Activate the Plugin:**
   - Navigate to `Plugins` in the dashboard.
   - Click `Activate` next to the plugin.
3. **Add Certificates:**
   - Go to `Certificate Management`.
   - Enter certificate details (student name, certificate code, course, etc.).
4. **Embed the Search Form:**
   - Copy and paste the shortcode into any page or post:
     ```
     [certificate_verification_form]
     ```
5. **Test Verification:**
   - Visit the page with the search form.
   - Enter a certificate code and verify the details.

## 🔍 How It Works
Users can search certificates using different parameters:

| Search Parameter   | Example Input   |
|--------------------|----------------|
| Certificate Code  | CERT12345       |
| Student Name      | John Doe        |
| Course Name       | Web Development |
| Course Duration   | 6 Months        |
| Award Date        | 2025-03-10      |

- If a valid certificate is found, its details are displayed.
- If not, a "Certificate Not Found" message appears.

## 📜 Changelog
### v1.0.0 (Initial Release)
- Certificate storage & search functionality.
- Multi-parameter search support.
- Shortcode integration.

## 📬 Support
For feature requests, bug reports, or contributions, feel free to create an issue in this repository.
