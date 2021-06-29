import React from 'react';
import axios from 'axios';
import { useState, useEffect } from 'react';
import { useParams } from 'react-router';

export const UserDetails = () => {
  let { id } = useParams();
  const [user, setUser] = useState({})

  useEffect(() => {
    axios
      .get(`http://localhost:8000/api/user/${id}`)
      .then((res) => res.data)
      .then((userDTO) => console.log(userDTO[0]));
  }, []);


  return (
    <div>
      {user.firstname}
    </div>
  );
};
