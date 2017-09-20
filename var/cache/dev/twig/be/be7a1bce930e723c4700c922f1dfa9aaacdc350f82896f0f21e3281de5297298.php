<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0920480bce2627ecd94a394abf3aaa1f6c65e33cafdf6a6f6aa2a2466968148c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_475a28d1de75387024aa26c8da049ff6845e75ab2db60d485e52f5cba55cb87d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475a28d1de75387024aa26c8da049ff6845e75ab2db60d485e52f5cba55cb87d->enter($__internal_475a28d1de75387024aa26c8da049ff6845e75ab2db60d485e52f5cba55cb87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b725b64314116523ca42af144f73f7faec7316537fd189dd41f579a1bd7b9184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b725b64314116523ca42af144f73f7faec7316537fd189dd41f579a1bd7b9184->enter($__internal_b725b64314116523ca42af144f73f7faec7316537fd189dd41f579a1bd7b9184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_475a28d1de75387024aa26c8da049ff6845e75ab2db60d485e52f5cba55cb87d->leave($__internal_475a28d1de75387024aa26c8da049ff6845e75ab2db60d485e52f5cba55cb87d_prof);

        
        $__internal_b725b64314116523ca42af144f73f7faec7316537fd189dd41f579a1bd7b9184->leave($__internal_b725b64314116523ca42af144f73f7faec7316537fd189dd41f579a1bd7b9184_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_22991ebcddfd6c33d60765db3c649d35f9ed318147d141b1a24b3a55a1fd845e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22991ebcddfd6c33d60765db3c649d35f9ed318147d141b1a24b3a55a1fd845e->enter($__internal_22991ebcddfd6c33d60765db3c649d35f9ed318147d141b1a24b3a55a1fd845e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_05b90ae915dc26163f84f7d0dcccee5503acaa79edb08a782256988bb310b17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b90ae915dc26163f84f7d0dcccee5503acaa79edb08a782256988bb310b17f->enter($__internal_05b90ae915dc26163f84f7d0dcccee5503acaa79edb08a782256988bb310b17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_05b90ae915dc26163f84f7d0dcccee5503acaa79edb08a782256988bb310b17f->leave($__internal_05b90ae915dc26163f84f7d0dcccee5503acaa79edb08a782256988bb310b17f_prof);

        
        $__internal_22991ebcddfd6c33d60765db3c649d35f9ed318147d141b1a24b3a55a1fd845e->leave($__internal_22991ebcddfd6c33d60765db3c649d35f9ed318147d141b1a24b3a55a1fd845e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a5fe9cff96ba93a6300165c967d797c7218d08a85f2a6915a0adb267e881084d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5fe9cff96ba93a6300165c967d797c7218d08a85f2a6915a0adb267e881084d->enter($__internal_a5fe9cff96ba93a6300165c967d797c7218d08a85f2a6915a0adb267e881084d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_974e18b6c32c7366c9f7033f2597c9e9b8b76a769ba89a3e579a072ee2528e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974e18b6c32c7366c9f7033f2597c9e9b8b76a769ba89a3e579a072ee2528e8b->enter($__internal_974e18b6c32c7366c9f7033f2597c9e9b8b76a769ba89a3e579a072ee2528e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_974e18b6c32c7366c9f7033f2597c9e9b8b76a769ba89a3e579a072ee2528e8b->leave($__internal_974e18b6c32c7366c9f7033f2597c9e9b8b76a769ba89a3e579a072ee2528e8b_prof);

        
        $__internal_a5fe9cff96ba93a6300165c967d797c7218d08a85f2a6915a0adb267e881084d->leave($__internal_a5fe9cff96ba93a6300165c967d797c7218d08a85f2a6915a0adb267e881084d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96403e1b9755fed28c602d85edf1cd90ccbecf921b690618e75a5fee2a921ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96403e1b9755fed28c602d85edf1cd90ccbecf921b690618e75a5fee2a921ff9->enter($__internal_96403e1b9755fed28c602d85edf1cd90ccbecf921b690618e75a5fee2a921ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fddab13793656842c7bca9f189d83fd02a5d6d7b26d5d85419abfc9ed24fbe0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fddab13793656842c7bca9f189d83fd02a5d6d7b26d5d85419abfc9ed24fbe0a->enter($__internal_fddab13793656842c7bca9f189d83fd02a5d6d7b26d5d85419abfc9ed24fbe0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fddab13793656842c7bca9f189d83fd02a5d6d7b26d5d85419abfc9ed24fbe0a->leave($__internal_fddab13793656842c7bca9f189d83fd02a5d6d7b26d5d85419abfc9ed24fbe0a_prof);

        
        $__internal_96403e1b9755fed28c602d85edf1cd90ccbecf921b690618e75a5fee2a921ff9->leave($__internal_96403e1b9755fed28c602d85edf1cd90ccbecf921b690618e75a5fee2a921ff9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
