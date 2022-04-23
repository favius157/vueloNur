
const  _private = new WeakMap();
class EncargadoVuelo {
    constructor(nombreEncargado, numeroTelefonico, edad, ci) {

        const properties = {
            nombreEncargado: nombreEncargado,
            numeroTelefono: numeroTelefonico,
            edad: edad,
            ci: ci
        }

        _private.set(this, {properties});
    }

    get getNombreEncargado() {
        return _private.get(this).properties['nombreEncargado'];
    }

    set setNombreEncargado(nombreEncargado) {
        return _private.get(this).properties['nombreEncargado'] = nombreEncargado;
    }

    get getNumeroTelefono() {
        return _private.get(this).properties['numeroTelefono'];
    }

    set setNumeroTelefono(numeroTelefono) {
        return _private.get(this).properties['numeroTelefono'] = numeroTelefono;
    }

    get getEdad() {
        return _private.get(this).properties['edad'];
    }

    set setEdad(edad) {
        return _private.get(this).properties['edad'] = edad;
    }

    get getCi() {
        return _private.get(this).properties['ci'];
    }

    set setCi(ci) {
        return _private.get(this).properties['ci'] = ci;
    }

}
