<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_be86a5a82cb726c774d4c80603da8532662fd579e82ada2f5ae013f6379211fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_425f68369b09173d8c7c7857b10f46d9adc35f3b354d60f1cb51cdc07d315795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_425f68369b09173d8c7c7857b10f46d9adc35f3b354d60f1cb51cdc07d315795->enter($__internal_425f68369b09173d8c7c7857b10f46d9adc35f3b354d60f1cb51cdc07d315795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_46e697fa8b235bb476728c851c361e76503d438c0c3cca3564c49dab8f5c6f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e697fa8b235bb476728c851c361e76503d438c0c3cca3564c49dab8f5c6f3a->enter($__internal_46e697fa8b235bb476728c851c361e76503d438c0c3cca3564c49dab8f5c6f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_425f68369b09173d8c7c7857b10f46d9adc35f3b354d60f1cb51cdc07d315795->leave($__internal_425f68369b09173d8c7c7857b10f46d9adc35f3b354d60f1cb51cdc07d315795_prof);

        
        $__internal_46e697fa8b235bb476728c851c361e76503d438c0c3cca3564c49dab8f5c6f3a->leave($__internal_46e697fa8b235bb476728c851c361e76503d438c0c3cca3564c49dab8f5c6f3a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51f454be64b0864a5e135c5ff262526fd65dd652d28657bae8ba02c2b9382ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f454be64b0864a5e135c5ff262526fd65dd652d28657bae8ba02c2b9382ab0->enter($__internal_51f454be64b0864a5e135c5ff262526fd65dd652d28657bae8ba02c2b9382ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b34c4edb69150958822390e3e9bafe2d03f76468876c856cc2d118d4681428c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34c4edb69150958822390e3e9bafe2d03f76468876c856cc2d118d4681428c4->enter($__internal_b34c4edb69150958822390e3e9bafe2d03f76468876c856cc2d118d4681428c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_b34c4edb69150958822390e3e9bafe2d03f76468876c856cc2d118d4681428c4->leave($__internal_b34c4edb69150958822390e3e9bafe2d03f76468876c856cc2d118d4681428c4_prof);

        
        $__internal_51f454be64b0864a5e135c5ff262526fd65dd652d28657bae8ba02c2b9382ab0->leave($__internal_51f454be64b0864a5e135c5ff262526fd65dd652d28657bae8ba02c2b9382ab0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
