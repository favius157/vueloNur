
const  _privateVuelo = new WeakMap();

class Vuelo {
    constructor(origen, destino, encargadoVuelos) {

        const properties = {
            numeroVuelo: "",
            origen: origen,
            destino: destino,
            codAvion: "",
            tripulantes: [],
            encargadoVuelos: encargadoVuelos,
            millas: 0
        }

        _privateVuelo.set(this, {properties});

    }

    get getNumeroVuelo() {
    return _privateVuelo.get(this).properties['numeroVuelo'];
    }

    set setNumeroVuelo(numeroVuelo) {
    return _privateVuelo.get(this).properties['numeroVuelo'] = numeroVuelo;
    }

    get getOrigen() {
    return _privateVuelo.get(this).properties['origen'];
    }

    set setOrigen(origen) {
    return _privateVuelo.get(this).properties['origen'] = origen;
    }

    get getDestino() {
        return _privateVuelo.get(this).properties['destino'];
    }

    set setDestino(destino) {
        return _privateVuelo.get(this).properties['destino'] = destino;
    }
    
    get getCodigoAvion() {
        return _privateVuelo.get(this).properties['codigoAvion'];
    }

    set setCodigoAvion(codigoAvion) {
        return _privateVuelo.get(this).properties['codigoAvion'] = codigoAvion;
    }
    
    get getTripulantes() {
        return _privateVuelo.get(this).properties['tripulantes'];
    }

    set setTripulantes(tripulantes) {
        return _privateVuelo.get(this).properties['tripulantes'] = tripulantes;
    }
    
    get getEncargadoVuelos() {
        return _privateVuelo.get(this).properties['encargadoVuelos'];
    }

    set setEncargadoVuelos(encargadoVuelos) {
        return _privateVuelo.get(this).properties['encargadoVuelos'] = encargadoVuelos;
    }
    
    get getMillas() {
        return _privateVuelo.get(this).properties['millas'];
    }

    set setMillas(numeroVuelo) {
        return _privateVuelo.get(this).properties['millas'] = millas;
    }

}
