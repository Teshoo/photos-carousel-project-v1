import axios from 'axios';

/**
 * @param {string|null} tripIri
 * @returns {Promise}
 */
export function fetchTripPictures(tripIri) {
    const params = {};
    if (tripIri) {
        params['dayTrip.trip'] = tripIri;
    }

    return axios.get('api/pictures', { 
        params,
    });
}