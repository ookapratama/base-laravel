<?php

namespace App\Http\Controllers;

use App\Services\MenuService;
use App\Http\Requests\MenuRequest;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct(
        protected MenuService $service
    ) {}

    public function index()
    {
        $menus = $this->service->getMenuTree();
        return view('pages.menu.index', compact('menus'));
    }

    public function create()
    {
        $parentMenus = $this->service->all(); // Simplified for now
        return view('pages.menu.create', compact('parentMenus'));
    }

    public function store(MenuRequest $request)
    {
        $this->service->create($request->validated());
        return redirect()->route('menu.index')->with('success', 'Menu berhasil ditambahkan');
    }

    public function show(int $id)
    {
        $menu = $this->service->find($id);
        return view('pages.menu.show', compact('menu'));
    }

    public function edit(int $id)
    {
        $menu = $this->service->find($id);
        $parentMenus = $this->service->all();
        return view('pages.menu.edit', compact('menu', 'parentMenus'));
    }

    public function update(MenuRequest $request, int $id)
    {
        $this->service->update($id, $request->validated());
        return redirect()->route('menu.index')->with('success', 'Menu berhasil diperbarui');
    }

    public function destroy(int $id)
    {
        $this->service->delete($id);
        return redirect()->route('menu.index')->with('success', 'Menu berhasil dihapus');
    }
}
