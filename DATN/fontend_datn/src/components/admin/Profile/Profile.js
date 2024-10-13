import React from "react";

const Profile = () => {
  const user = {
    name: "Người Dùng",
    email: "user@example.com",
    role: "Admin",
  };

  return (
    <div>
      <h1>Thông Tin Cá Nhân</h1>
      <p>Tên: {user.name}</p>
      <p>Email: {user.email}</p>
      <p>Vai trò: {user.role}</p>
    </div>
  );
};

export default Profile;
