<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TSwitchingApikey Controller
 *
 * @property \App\Model\Table\TSwitchingApikeyTable $TSwitchingApikey
 */
class TSwitchingApikeyController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tSwitchingApikey = $this->paginate($this->TSwitchingApikey);

        $this->set(compact('tSwitchingApikey'));
        $this->set('_serialize', ['tSwitchingApikey']);
    }

    /**
     * View method
     *
     * @param string|null $id T Switching Apikey id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tSwitchingApikey = $this->TSwitchingApikey->get($id, [
            'contain' => []
        ]);

        $this->set('tSwitchingApikey', $tSwitchingApikey);
        $this->set('_serialize', ['tSwitchingApikey']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tSwitchingApikey = $this->TSwitchingApikey->newEntity();
        if ($this->request->is('post')) {
            $tSwitchingApikey = $this->TSwitchingApikey->patchEntity($tSwitchingApikey, $this->request->data);
            if ($this->TSwitchingApikey->save($tSwitchingApikey)) {
                $this->Flash->success(__('The t switching apikey has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The t switching apikey could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tSwitchingApikey'));
        $this->set('_serialize', ['tSwitchingApikey']);
    }

    /**
     * Edit method
     *
     * @param string|null $id T Switching Apikey id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tSwitchingApikey = $this->TSwitchingApikey->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tSwitchingApikey = $this->TSwitchingApikey->patchEntity($tSwitchingApikey, $this->request->data);
            if ($this->TSwitchingApikey->save($tSwitchingApikey)) {
                $this->Flash->success(__('The t switching apikey has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The t switching apikey could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tSwitchingApikey'));
        $this->set('_serialize', ['tSwitchingApikey']);
    }

    /**
     * Delete method
     *
     * @param string|null $id T Switching Apikey id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tSwitchingApikey = $this->TSwitchingApikey->get($id);
        if ($this->TSwitchingApikey->delete($tSwitchingApikey)) {
            $this->Flash->success(__('The t switching apikey has been deleted.'));
        } else {
            $this->Flash->error(__('The t switching apikey could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
