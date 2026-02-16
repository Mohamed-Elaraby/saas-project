// replace Special Chars And Underscore To Dash Lowercase with select box
function initText_with_select_box (field_display_name, field_name)
{
    field_display_name.on('change',function() {
        return field_name.val(replaceSpecialCharsUnderscoreToDashLowercase($(this).val()));
    });
}

// replace Special Chars And Underscore To Dash Lowercase with text input
function initText_with_text_input (field_display_name, field_name)
{
        // Get value from input number two
        let inputValue = field_display_name.val();

        // Restrict special characters in input number two
        let filteredValue = inputValue.replace(/[^a-zA-Z0-9\s]/g, '');  // Allow letters, numbers, hyphens, and underscores

        field_display_name.val(filteredValue);
        // Replace spaces and underscores with dashes
        const transformedValue = filteredValue.replace(/\s+|_+/g, '-').toLowerCase();

        // Update input number one with the transformed value
        field_name.val(transformedValue);

}

function replaceSpecialCharsUnderscoreToDashLowercase(text) {
    return text.replace(/[^a-zA-Z0-9\-]+/g, '-').toLowerCase();
}

// function restrictSpecialCharacters (theInput)
// {
//         const inputObject = theInput;
//         const originalText = inputObject.val();
//         const filteredText = originalText.replace(/\W+/g, '');
//         inputObject.val(filteredText);
// }
