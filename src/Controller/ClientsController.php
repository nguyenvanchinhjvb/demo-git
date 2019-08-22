<?php
namespace App\Controller;

use App\Controller\AppController;

class ClientsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadComponent('Flash'); // Include the FlashComponent
    }

    public function index()
    {
        $Clients = $this->Clients->find();
        $this->set(compact('Clients'));
    }

    public function view($id)
    {
        $client = $this->Clients->findById($id)->firstOrFail();
        $this->set(compact('client'));
    }

    public function add()
    {
        $client = $this->Clients->newEntity();
        if ($this->request->is('post')) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());

            if ($this->Clients->save($client)) {
                $this->Flash->success(__('Your client has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your client.'));
        }
        $this->set('client', $client);
    }

    public function edit($id)
    {
    $client = $this->Clients->findById($id)->firstOrFail();
    if ($this->request->is(['post', 'put'])) {
        $this->Clients->patchEntity($client, $this->request->getData());
        if ($this->Clients->save($client)) {
            $this->Flash->success(__('Your client has been updated.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update your client.'));
    }

    $this->set('client', $client);
}

    public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $client = $this->Clients->findById($id)->firstOrFail();
    if ($this->Clients->delete($client)) {
        $this->Flash->success(__('The {0} client has been deleted.', $client->name));
        return $this->redirect(['action' => 'index']);
    }
}
}
