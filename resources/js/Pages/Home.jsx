import React from 'react';
import ProgressiveImg from '@/Components/ProgressiveImage';

function Home(props) {

    console.log(props.user);

    return (
        <div>
            <ProgressiveImg
            src={"https://images.unsplash.com/photo-1660276419535-1b45f1085250?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=393&q=80"}
            placeholderSrc={"https://via.placeholder.com/700"}
            width="700"
            height="465"
            />
        </div>
    );
}

export default Home;