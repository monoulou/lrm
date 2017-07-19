<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_346a57ff4db171d28f2ecbf587abe9506fb20eaaf63e212f299c65055ca367f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_99b0646516c5c53c8b3a2bb77c2ab642b5ba13e3e9aad531934daad8982f381d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b0646516c5c53c8b3a2bb77c2ab642b5ba13e3e9aad531934daad8982f381d->enter($__internal_99b0646516c5c53c8b3a2bb77c2ab642b5ba13e3e9aad531934daad8982f381d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_48f3e2386879681bcea652a596f652b5d4813fad9e2e2eb68a1f23520da77db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f3e2386879681bcea652a596f652b5d4813fad9e2e2eb68a1f23520da77db0->enter($__internal_48f3e2386879681bcea652a596f652b5d4813fad9e2e2eb68a1f23520da77db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99b0646516c5c53c8b3a2bb77c2ab642b5ba13e3e9aad531934daad8982f381d->leave($__internal_99b0646516c5c53c8b3a2bb77c2ab642b5ba13e3e9aad531934daad8982f381d_prof);

        
        $__internal_48f3e2386879681bcea652a596f652b5d4813fad9e2e2eb68a1f23520da77db0->leave($__internal_48f3e2386879681bcea652a596f652b5d4813fad9e2e2eb68a1f23520da77db0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bff25f6ec73bb92b7713c6eb7c6e95f47098c1a9500013b0bace2e130313cee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bff25f6ec73bb92b7713c6eb7c6e95f47098c1a9500013b0bace2e130313cee2->enter($__internal_bff25f6ec73bb92b7713c6eb7c6e95f47098c1a9500013b0bace2e130313cee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d6a4cca3c50fea1f9a249f01c84cabc07777c8f20a9b14e6f1fc5745b0b57bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a4cca3c50fea1f9a249f01c84cabc07777c8f20a9b14e6f1fc5745b0b57bde->enter($__internal_d6a4cca3c50fea1f9a249f01c84cabc07777c8f20a9b14e6f1fc5745b0b57bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d6a4cca3c50fea1f9a249f01c84cabc07777c8f20a9b14e6f1fc5745b0b57bde->leave($__internal_d6a4cca3c50fea1f9a249f01c84cabc07777c8f20a9b14e6f1fc5745b0b57bde_prof);

        
        $__internal_bff25f6ec73bb92b7713c6eb7c6e95f47098c1a9500013b0bace2e130313cee2->leave($__internal_bff25f6ec73bb92b7713c6eb7c6e95f47098c1a9500013b0bace2e130313cee2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
