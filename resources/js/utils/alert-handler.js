/**
 * AlertHandler
 * A utility class to handle SweetAlert2 and Toastr notifications
 * based on standardized JSON responses.
 */
import Swal from "sweetalert2";
import toastr from "toastr";
import "toastr/build/toastr.css";
import "sweetalert2/dist/sweetalert2.min.css";

class AlertHandler {
    constructor() {
        this.swal = Swal;
        this.toastr = toastr;

        // Configure Toastr defaults
        if (this.toastr) {
            this.toastr.options = {
                closeButton: true,
                debug: false,
                newestOnTop: true,
                progressBar: true,
                positionClass: "toast-top-right",
                preventDuplicates: false,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                timeOut: "5000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
            };
        } else {
            console.warn(
                "Toastr not found. Toast notifications will fallback to SweetAlert.",
            );
        }

        if (!this.swal) {
            console.error(
                "SweetAlert2 not found. AlertHandler will not function correctly.",
            );
        }
    }

    /**
     * Handle a standardized JSON response
     * @param {Object} response - The response object (axios response or plain object)
     */
    handle(response) {
        const data = response.data || response;

        if (data.success) {
            this.showSuccess(data.message);
        } else {
            this.showError(data.message, data.errors);
        }
    }

    /**
     * Show a generic success message
     * @param {string} message
     * @param {boolean} useToast - If true, use Toastr instead of SweetAlert
     */
    showSuccess(message, useToast = false) {
        if (useToast && this.toastr) {
            this.toastr.success(message);
        } else {
            this.swal.fire({
                icon: "success",
                title: "Success!",
                text: message,
                customClass: {
                    confirmButton: "btn btn-primary",
                },
                buttonsStyling: false,
            });
        }
    }

    /**
     * Show a generic error message
     * @param {string} message
     * @param {Object} errors - Validation errors if any
     */
    showError(message, errors = null) {
        let errorHtml = "";

        if (errors) {
            errorHtml = '<ul class="text-start mt-3">';
            for (const [key, value] of Object.entries(errors)) {
                value.forEach((err) => {
                    errorHtml += `<li>${err}</li>`;
                });
            }
            errorHtml += "</ul>";
        }

        this.swal.fire({
            icon: "error",
            title: "Error!",
            text: message,
            html: errorHtml || undefined,
            customClass: {
                confirmButton: "btn btn-primary",
            },
            buttonsStyling: false,
        });
    }

    /**
     * Show a generic warning message
     * @param {string} message
     * @param {boolean} useToast - If true, use Toastr instead of SweetAlert
     */
    showWarning(message, useToast = false) {
        if (useToast && this.toastr) {
            this.toastr.warning(message);
        } else {
            this.swal.fire({
                icon: "warning",
                title: "Warning!",
                text: message,
                customClass: {
                    confirmButton: "btn btn-primary",
                },
                buttonsStyling: false,
            });
        }
    }

    /**
     * Show a confirm dialog
     * @param {string} title
     * @param {string} text
     * @param {string} confirmText
     * @param {Function} onConfirm - Callback if confirmed
     */
    confirm(title, text, confirmText = "Yes, delete it!", onConfirm) {
        this.swal
            .fire({
                title: title || "Are you sure?",
                text: text || "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: confirmText,
                customClass: {
                    confirmButton: "btn btn-primary me-3",
                    cancelButton: "btn btn-label-secondary",
                },
                buttonsStyling: false,
            })
            .then((result) => {
                if (result.isConfirmed) {
                    if (typeof onConfirm === "function") {
                        onConfirm();
                    }
                }
            });
    }
}

// Make it globally available
window.AlertHandler = new AlertHandler();
