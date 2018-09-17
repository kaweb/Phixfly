<?php

namespace Kaweb\FixfloClient\Categories;


use Kaweb\FixfloClient\Helpers\RequestHelper;
use Kaweb\FixfloClient\Models\IssueDraftMediaModel;
use Kaweb\FixfloClient\Models\IssueDraftModel;

class IssueDraftEndpoints
{
    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * IssueDraftEndpoint constructor.
     * @param RequestHelper $requestHelper
     */
    public function __construct(RequestHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-draft-endpoints-issue-draft-save
     *
     * @param IssueDraftModel $issueDraftModel
     * @return array
     */
    public function issueDraftSave(IssueDraftModel $issueDraftModel)
    {
        return $this->requestHelper->post('/issuedraft', [
            'IssueDraftSrc' => $issueDraftModel
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-draft-endpoints-get-issue-draft
     *
     * @param string $id
     * @return array
     */
    public function getIssueDraft(string $id)
    {
        return $this->requestHelper->get('/issuedraft/' . $id);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-draft-endpoints-issue-draft-media
     *
     * @param string $id
     * @param int $pg
     * @return array
     */
    public function issueDraftMedia(string $id, int $pg)
    {
        return $this->requestHelper->post('/issuedraft/' . $id . 'issuedraftmedia', [
            'pg' => $pg
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-draft-endpoints-commit-issue-draft
     *
     * @param IssueDraftModel $issueDraft
     * @return array
     */
    public function commitIssueDraft(IssueDraftModel $issueDraft)
    {
        return $this->requestHelper->post('/issuedraft/commit', [
           'IssueDraftSrc' => $issueDraft
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-draft-endpoints-delete-issue-draft
     *
     * @param IssueDraftModel $issueDraft
     * @return array
     */
    public function deleteIssueDraft(IssueDraftModel $issueDraft)
    {
        return $this->requestHelper->post('/issuedraft/delete', [
            'IssueDraftSrc' => $issueDraft
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-draft-endpoints-save-issuedraftmedia
     *
     * @param IssueDraftMediaModel $issueDraftMedia
     * @return array
     */
    public function saveIssueDraftMedia(IssueDraftMediaModel $issueDraftMedia)
    {
        return $this->requestHelper->post('/issuedraftmedia', [
            'IssueDraftMediaSrc' => $issueDraftMedia
        ]);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-draft-endpoints-get-issuedraftmedia
     *
     * @param string $id
     * @return array
     */
    public function getIssueDraftMedia(string $id)
    {
        return $this->requestHelper->get('/issuedraftmedia/' . $id);
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-draft-endpoints-download-issuedraftmedia
     *
     * @param string $id
     * @return array
     */
    public function downloadIssueDraftMedia(string $id)
    {
        return $this->requestHelper->get('/issuedraftmedia/' . $id . '/download');
    }

    /**
     * http://api-docs.fixflo.com/#v2-endpoints-v2-endpoints-issue-draft-endpoints-delete-issuedraftmedia
     *
     * @param IssueDraftMediaModel $issueDraftMedia
     * @return array
     */
    public function deleteIssueDraftMedia(IssueDraftMediaModel $issueDraftMedia)
    {
        return $this->requestHelper->post('/issuedraftmedia/delete', [
            'IssueDraftMediaSrc' => $issueDraftMedia
        ]);
    }
}