const token = localStorage.getItem('auth_token');
const userId = localStorage.getItem('user_id'); // Assuming the user ID is stored in local storage
const userEmail = localStorage.getItem('email');

    // Make sure userId is defined
    if (userId) {
        axios.get(`api/user/${userId}`, {
            headers: {
                Authorization: `Bearer ${token}`
            }
        }).then(response => {
            document.getElementById('idid').innerText = response.data.id
            document.getElementById('user-name').innerText = response.data.name;
            document.getElementById('email').innerText = response.data.email;
        }).catch(error => {
            console.error('Error fetching user data', error);
        });
    } else {
        console.error('User ID not found in local storage');
    };
