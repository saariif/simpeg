// CHECKING FORM
const validateForm = formSelector => {
    const formElement = document.querySelector(formSelector);

        const validationOptions = [
            {
                attribute : 'required',
                isValid : input => input.value.trim() != '',
                errorMessage : (input, label) => `${label.textContent} wajib diisi !`
            },
        ];

        const validateSingleFormGroup = formGroup => {
            const label = formGroup.querySelector('label');
            const input = formGroup.querySelector('input, textarea, select');
            const errorContainer = formGroup.querySelector('#error');
            const errorIcon = formGroup.querySelector('.error-icon');
            const successIcon = formGroup.querySelector('.success-icon');
            
            let formGroupError = false;
            for(const option of validationOptions){
                if(input.hasAttribute(option.attribute) && !option.isValid(input)){
                    errorContainer.textContent = option.errorMessage(input, label);
                    input.classList.add('is-invalid');
                    formGroupError=true;
                }else{
                    // errorContainer.textContent='';
                    input.classList.remove('is-invalid');
                    formGroupError=false;
                }
            }
            // if(!formGroupError){
            //     errorContainer.textContent='';
            // }
        };

    formElement.setAttribute('novalidate', '');

    formElement.addEventListener('submit', event=> {
        event.preventDefault();
        validateAllFromGroups(formElement);
    });

    const validateAllFromGroups = formToValidate => {
        const formGroups = Array.from(formToValidate.querySelectorAll('.formGroup'));

        formGroups.forEach(formGroup => {
            validateSingleFormGroup(formGroup);
        })
    }
};

validateForm ('#myForm');