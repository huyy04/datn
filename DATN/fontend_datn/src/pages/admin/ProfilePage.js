import React, { useEffect, useState } from "react";
import axios from "axios";

const ProfilePage = () => {
  const [user, setUser] = useState(null);

  useEffect(() => {
    const fetchUser = async () => {
      const response = await axios.get("http://localhost:8000/api/profile");
      setUser(response.data);
    };
    fetchUser();
  }, []);

  if (!user) return <div>Loading...</div>;

  return (
    <div>
      <h1>Thông Tin Cá Nhân</h1>
      <p>Tên: {user.name}</p>
      <p>Email: {user.email}</p>
      <p>Vai trò: {user.role}</p>
    </div>
  );
};

export default ProfilePage;
