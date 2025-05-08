import React from "react";

const Type = ({ usuarios }: { usuarios: { id: number; nombre: string; apellido: string; edad: number; email: string }[] }) => {
    return (
        <>
            <h1>Estudios Compartidos</h1>
            <br />
            <br />
            <ul>
                {usuarios.map((usuario) => (
                    <li key={usuario.id}>
                        {usuario.nombre} {usuario.apellido} - {usuario.edad} años - {usuario.email}
                    </li>
                ))}
            </ul>
        </>
    );
};

export default Type;
