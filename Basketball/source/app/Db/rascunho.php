$obDatabase = new Database('teams');
        $this->id = $obDatabase->insert([
                                        'team_name' => $this->name,
                                        'contact' => $this->contact,
                                        'modality' => $this->modality,
                                        'gender' => $this->gender,
                                        'state' => $this->state,
                                        'city' => $this->city  
                                    ]);