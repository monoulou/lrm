<?php

/* MAUserBundle:Registration:register.html.twig */
class __TwigTemplate_27837feb3b2471e09871860973fd0dedf50159248cbf3aec9307514e0b2e38ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Registration:register.html.twig", 1);
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
        $__internal_ba70607e3bb38894126d3aab7509a5455fe453d0a93d0fbfd99773f4f5f22663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba70607e3bb38894126d3aab7509a5455fe453d0a93d0fbfd99773f4f5f22663->enter($__internal_ba70607e3bb38894126d3aab7509a5455fe453d0a93d0fbfd99773f4f5f22663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:register.html.twig"));

        $__internal_f699abfedc9c0b281d39fe802d98aabb00e9deaffdd51fcebffeef6862b59173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f699abfedc9c0b281d39fe802d98aabb00e9deaffdd51fcebffeef6862b59173->enter($__internal_f699abfedc9c0b281d39fe802d98aabb00e9deaffdd51fcebffeef6862b59173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba70607e3bb38894126d3aab7509a5455fe453d0a93d0fbfd99773f4f5f22663->leave($__internal_ba70607e3bb38894126d3aab7509a5455fe453d0a93d0fbfd99773f4f5f22663_prof);

        
        $__internal_f699abfedc9c0b281d39fe802d98aabb00e9deaffdd51fcebffeef6862b59173->leave($__internal_f699abfedc9c0b281d39fe802d98aabb00e9deaffdd51fcebffeef6862b59173_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1f43e39f8c2ec86e40ab94590d471322a15434f5dde307c98542ac9453c26b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f43e39f8c2ec86e40ab94590d471322a15434f5dde307c98542ac9453c26b2->enter($__internal_d1f43e39f8c2ec86e40ab94590d471322a15434f5dde307c98542ac9453c26b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3267f547550163d0a5bc0d312e6900e7124aee614bcc8c3a5908ebc4f6ded21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3267f547550163d0a5bc0d312e6900e7124aee614bcc8c3a5908ebc4f6ded21d->enter($__internal_3267f547550163d0a5bc0d312e6900e7124aee614bcc8c3a5908ebc4f6ded21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "MAUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3267f547550163d0a5bc0d312e6900e7124aee614bcc8c3a5908ebc4f6ded21d->leave($__internal_3267f547550163d0a5bc0d312e6900e7124aee614bcc8c3a5908ebc4f6ded21d_prof);

        
        $__internal_d1f43e39f8c2ec86e40ab94590d471322a15434f5dde307c98542ac9453c26b2->leave($__internal_d1f43e39f8c2ec86e40ab94590d471322a15434f5dde307c98542ac9453c26b2_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Registration:register.html.twig";
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
    {% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}", "MAUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}
